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
    <section class="section-padding our-vision ref-design">
        <div class="container">
            <div class="section-title">
                <h3>Reference Designs &amp; Solutions</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="about-mission">
                        <div class="icon-box">
                            <img src="assets/img/icons/factory.png" alt="vision-icon">
                        </div>
                        <h5>Industrial</h5>
                        <ol>
                            <li>Single Phase Smart Energy Meter Power Supply</li>
                            <li>Three Phase Energy meter Power Supply</li>
                            <li>SMPS 100 W (Constant Voltage Power Supply)</li>

                            <li>DA14531MOD ( Dialog Semi Ble Module)</li>

                        </ol>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-mission">
                        <div class="icon-box">
                            <img src="assets/img/icons/bulb.png" alt="vision-icon">
                        </div>
                        <h5>Lightning</h5>
                        <ol>
                            <li>Solid State Lightning Led Driver : 50-150W</li>
                            <li>Solid State Lightning Led Driver : 50-150W</li>
                            <li>Solid State Lightning Led Driver : 100-150W</li>

                        </ol>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-mission">
                        <div class="icon-box">
                            <img src="assets/img/icons/auto.png" alt="vision-icon">
                        </div>
                        <h5>Automotive</h5>
                        <ol>
                            <li>Vehicle Tracking system</li>
                            <li>RH850 F1KM-S1 Board
                                    For BMS,ECU &amp; Gateway</li>
                            <li>TFT Cluster</a></li>

                            <li>240 W Dc-Dc Buck Converter</li>

                            <li>Body Control Module For 2Wheeler</li>

                            <li>3-4 KW BLDC Inverter Solution</li>

                        </ol>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
