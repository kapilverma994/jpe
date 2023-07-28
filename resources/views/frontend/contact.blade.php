@extends('frontend.layouts.main')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
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
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>{{ $data->title }}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-black">Send us a message</h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end aos-init aos-animate" data-aos="fade-right"
                    data-aos-delay="100">



                    <div class="col-12 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">

                        <form action="{{ route('submitEnquiry') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <input type="hidden" name="type" name="contact" value="contact">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required="">
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required="">
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="tel" class="form-control" name="mobile" placeholder="Contact number"
                                        required="">
                                </div>
                            </div>


                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                            </div>
                            <button type="submit" id="">Send Message</button>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

        <section class="upload-boom bg-light">
            <div class="container">
                <div class="section-title">
                    <h2>Inquiry Upload BOM</h2>
                    <p>Upload your BOM here , our experienced FAE Team will study &amp; offer alternates with short
                        leadtimes &amp; cost benefits . </p>
                </div>

                <form class="form-inline" action="{{ route('submitEnquiry') }}" aid="uploadForm"
                    enctype="multipart/form-data" method="post">
                    @csrf

                    <input type="hidden" name="type" name="boom" value="bom">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-4">
                            <input type="tel" class="form-control" name="mobile" placeholder="Phone no."
                                required="">
                        </div>
                    </div>
                    <div class="row text-center mt-5">
                        <div class="upload-col">
                            <label class="custom-file-label" for="customFile">Upload BOM <span>( word / excel /PDF only )
                                </span></label>
                            <input type="file" class="custom-file-input" name="file" id="customFile">

                            {{-- <select id="sheetSelect">
                                <option value="select-sheet">Select Sheet</option>
                            </select> --}}
                        </div>
                        <div class="text-center">
                            <button type="submit" id="submitBom" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </div>


                </form>
            </div>

            <div id="thankyou-popup">
                <h3>Thank you for your submission!</h3>
            </div>
        </section>

    </main>
@endsection
