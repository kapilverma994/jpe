@extends('frontend.layouts.main')
@section('content')
    <div class="breadcrumbs line-card-banner">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('https://images.unsplash.com/photo-1581092921461-eab62e97a780?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>{{ $data->title }}</h2>
                        <p>{{ $data->description }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about" class="about about-page white-overlay">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h5>{{ $title->short_description }}</h5>
            </div>
            <div class="row gy-4">
                @foreach ($services as $service)
                    <div class="col-md-4">
                        <div class="about-box">
                            <i class="fa-solid fa-circle-nodes"></i>
                            <div>
                                <h5>{{ $service->title }} </h5>
                                <p>{{ $service->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="section-padding about-team">
        <div class="container">
            @foreach ($services_middle as $midd)
                <div class="row">
                    <div class="col-md-6">
                        <div class="content col-center">
                            <h3>{{ $midd->title }}</h3>
                            <p>{{ $midd->description }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="assets/img/brain.png" alt="brain-chip">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="section-padding strip primary-overlay"
        style="background-image: url('assets/img/chip-blue.jpg'); background-position: center center; background-attachment: fixed; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="strip-content">
                        <h4 class="text-white">We have expertise in sourcing wide range of components &amp; arrange console
                            shipments.</h4>
                        <p class="text-white">JPED’s success is evidenced by long standing relations with our suppliers as
                            well as customers &amp; our endeavours in exceeding the expectation in Sales and Technology
                            promotion &amp; service support.</p>

                        <div class="btn-box mt-5">
                            <a href="contact-us.html" class="btn-primary">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding our-vision">
        <div class="container">
            <div class="row">
                @foreach ($services_bottom as $btm)
                    <div class="col-md-6">
                        <div class="about-mission">
                            <div class="icon-box">
                                <img src="{{ asset('storage/' . $btm->image) }}" alt="vision-icon">
                            </div>
                            <h5>{{ $btm->title }}</h5>
                            <p>{{ $btm->description }}</p>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>

    </section>
@endsection
