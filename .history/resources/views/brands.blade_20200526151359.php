@extends('layouts.frontend.app')

@section('title','Brands')

@push('css')
<style>
    .img{height: 200px;}
    </style>
@endpush

@section('content')

<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url({{ asset('assets/images/bg_2.jpg')}});"
        data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
            <div class="col-md-12 text-center ftco-animate">
                <h1 class="mb-3 bread" style="background-image: url({{ asset('assets/images/bg_1.jpg')}});"
                    data-stellar-background-ratio="0.5">Brand Collaborations</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>Brand collaborations</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Brands
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Brand collaborations</h2>
                <p>We are in collaboration with the following brands</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img" style="background-image: url({{ asset('assets/images/trainer-2.jpg')}});"></div>
                    <div class="text py-4 px-5 ftco-animate">
                        <span class="subheading">Lead Trainer</span>
                        <h3><a href="#">Leonard Smith</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img order-xl-last"
                        style="background-image: url({{ asset('assets/images/trainer-3.jpg')}});"></div>
                    <div class="text py-4 px-5 ftco-animate">
                        <span class="subheading">Lead Trainer</span>
                        <h3><a href="#">James Buffer</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img order-xl-last"
                        style="background-image: url({{ asset('assets/images/trainer-4.jpg')}});"></div>
                    <div class="text py-4 px-5 ftco-animate">
                        <span class="subheading">Trainer</span>
                        <h3><a href="#">Maricar Collins</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')

@endpush