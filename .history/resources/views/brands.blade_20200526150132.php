@extends('layouts.frontend.app')

@section('title','Brands')

@push('css')
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
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/core.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="img" style="background-image: url({{ asset('assets/images/nike.jpg')}});"></div>
            </div>
            
        </div>
    </div>
</section>

@endsection

@push('js')

@endpush