@extends('frontend.layouts.main')

@section('content')
    <main class="line-card">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs pages-banner">
            <div class="page-header d-flex align-items-center"
                style="background-image: url('https://images.unsplash.com/photo-1644088379091-d574269d422f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1093&amp;q=80');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 text-center">
                            <h2>{{ $data->title }}</h2>

                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('line') }}">line card</a></li>
                        <li>{{ $data->title }}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->



        <section class="line-card-info">
            <div class="container">
                <div class="row card-intro">
                    <div class="col-md-4">
                        <div class="client-card">
                            <img class="profile" width="100%" src="{{ asset('storage/' . $data->logo) }}"
                                alt="{{ $data->title }}">

                            <p class="text-dark mt-5">For Inquiries:</p>
                            <ul>
                                <li><i class="fa-solid fa-circle-info"></i>{{ $data->email }}</li>
                                <li><i class="fa-solid fa-phone-volume"></i> <span></span>{{ $data->phone }}</li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="info">
                            <h3>{{ $data->title }}</h3>
                            <p>{{ $data->description }}</p>

                            <a href="{{ $data->url ?? '#' }}" class="btn btn-primary border-w">Website <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
@if(filled($data->feature))
                <div class="row mt-5 ">
                    @foreach ($data->feature->feature as $feature)
                        <div class="col-md-6 mb-3">
                            <div class="info-block">
                                {!! $feature['feature'] !!}
                            </div>
                        </div>
                    @endforeach
                </div>
@endif



            </div>
        </section>
    </main>
@endsection
