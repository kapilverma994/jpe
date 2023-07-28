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
                            <p>{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{ $data->title }}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->



        <section class="line-card-section" id="lineCardStyle2">
            <div class="container">



                <div class="row">
                    @foreach ($lines as $line)
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <a href="{{ route('lineDetail', $line->id) }}" class="content">
                                    <div class="front">
                                        <img class="profile" width="100%" src="{{ asset('storage/' . $line->logo) }}"
                                            alt="microchip">
                                    </div>

                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
