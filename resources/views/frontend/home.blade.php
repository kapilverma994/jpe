@extends('frontend.layouts.main')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class=" carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $banner->id == 1 ? 'active' : '' }} "
                    style="background-image: url({{ 'storage/'.$banner->image }})">
                    <div class="carousel-container d-flex justify-content-center align-items-center">
                        <h2 class="animate__animated animate__fadeInDown">{{ $banner->title }}</h2>
                        <p class="animate__animated animate__fadeInUp">{{ $banner->description }}.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            @endforeach



            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Icon Boxes Section ======= -->
        <section id="icon-boxes" class="icon-boxes">
            <div class="container">

                <div class="row">
                    @foreach ($industries as $indus)
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                            <div class="icon-box">
                                <div class="icon"><i class="{{ $indus->icon }}"></i></div>
                                <h4 class="title"><a href="">{{ $indus->title }}</a></h4>
                                <p class="description">{{ $indus->description }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Icon Boxes Section -->

        <!-- ======= About Us Section ======= -->
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about white-overlay">
            <div class="container" data-aos="fade-up">
                <div class="section-title">

                    <h5>
                        {{ $about->main_description }}
                    </h5>
                    <p>
                        {{ $about->short_description }}
                    </p>

                    <div class="btn-wrap mt-5">
                        <a href="{{ route('about') }}" class="btn-primary">Read more</a>
                    </div>
                </div>


            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($brands as $brand)
                            <div class="swiper-slide" data-swiper-slide-index="{{ $loop->iteration }}" role="group"
                                aria-label="{{ $loop->iteration }}/ {{ $brands->count() }}"><img
                                    src="{{ asset('storage/' . $brand->logo) }}" class="img-fluid" alt=""></div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch position-relative video-box"
                        style='background-image: url("https://images.unsplash.com/photo-1604754742629-3e5728249d73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80");'
                        data-aos="fade-right">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch"
                        data-aos="fade-left">

                        <div class="content">
                            <h3>{{ $why->main_description }}</h3>
                            <p>
                                {{ $why->short_description }}
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                @foreach ($faqs->take(3) as $faq)
                                    <li data-aos="fade-up" data-aos-delay="{{ $loop->iteration }}00">
                                        <a data-bs-toggle="collapse" class="collapse"
                                            data-bs-target="#accordion-list-{{ $loop->iteration }}"><span>0{{ $loop->iteration }}</span>{{ $faq->question }}
                                            <i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-{{ $loop->iteration }}"
                                            class="collapse {{ $loop->iteration == 1 ? 'show' : '' }}"
                                            data-bs-parent=".accordion-list">
                                            <p>
                                                {{ $faq->answer }}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $service->section_name }}</h2>
                    <p>{{ $service->main_description }}</p>
                </div>

                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box">
                                <i class="{{ $service->icon }}"></i>
                                <h4><a href="#">{{ $service->title }}</a></h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>{{ $cta->main_description }}</h3>
                        <p> {{ $cta->short_description }}.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{route('contact')}}">Send Requirements</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfoio Section ======= -->
        <section id="portfolio" class="portfoio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $port->section_name }}</h2>
                    <p>{{ $port->main_description }}</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Passive</li>
                            <li data-filter=".filter-card">Semiconductor</li>
                            <li data-filter=".filter-web">Others</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="https://images.unsplash.com/photo-1642229407420-a659dac2f029?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="https://images.unsplash.com/photo-1642229407420-a659dac2f029?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="https://images.unsplash.com/photo-1580584126903-c17d41830450?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=739&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="https://images.unsplash.com/photo-1580584126903-c17d41830450?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=739&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="https://images.unsplash.com/photo-1642229407420-a659dac2f029?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="https://images.unsplash.com/photo-1642229407420-a659dac2f029?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="https://images.unsplash.com/photo-1517420704952-d9f39e95b43e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="https://images.unsplash.com/photo-1517420704952-d9f39e95b43e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="https://images.unsplash.com/photo-1597423498043-8f85e9eb8ade?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="https://images.unsplash.com/photo-1597423498043-8f85e9eb8ade?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="https://images.unsplash.com/photo-1477039181047-efb4357d01bd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="https://images.unsplash.com/photo-1477039181047-efb4357d01bd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="https://images.unsplash.com/photo-1643186042811-63a2b94c7f98?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="https://images.unsplash.com/photo-1643186042811-63a2b94c7f98?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="https://images.unsplash.com/photo-1566962228192-8f80bdcb8ee2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="https://images.unsplash.com/photo-1566962228192-8f80bdcb8ee2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="https://images.unsplash.com/photo-1528845922818-cc5462be9a63?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="https://images.unsplash.com/photo-1528845922818-cc5462be9a63?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfoio Section -->





        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        @foreach ($faqs as $faq)
                            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="{{ $loop->iteration }}00">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#faq-list-{{ $loop->iteration }}">{{ $faq->question }}? <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-{{ $loop->iteration }}"
                                    class="collapse {{ $loop->iteration == 1 ? 'show' : '' }}"
                                    data-bs-parent=".faq-list">
                                    <p>
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                    <!--<div class="col-lg-5">-->
                    <!--    <div class="info">-->
                    <!--        <div class="address">-->
                    <!--            <i class="bi bi-geo-alt"></i>-->
                    <!--            <h4>Location:</h4>-->
                    <!--            <p>A108 Adam Street, New York, NY 535022</p>-->
                    <!--        </div>-->

                    <!--        <div class="email">-->
                    <!--            <i class="bi bi-envelope"></i>-->
                    <!--            <h4>Email:</h4>-->
                    <!--            <p>info@jpedindia.com</p>-->
                    <!--        </div>-->

                    <!--        <div class="phone">-->
                    <!--            <i class="bi bi-phone"></i>-->
                    <!--            <h4>Call:</h4>-->
                    <!--            <p>+91-22-61110222s</p>-->
                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                    <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
