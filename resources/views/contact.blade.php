@extends('layouts.frontend.app')

@section('title','Contact')

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
                    data-stellar-background-ratio="0.5">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>Contact</span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 text-md-right contact-info ftco-animate">
                <div class="col">
                    <div class="col-md-12 mb-4">
                        <h2 class="h5 font-weight-bold">Contact Information</h2>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-5">
                            <span>Address:</span>
                        </div>
                        <div class="col white">
                            198 West 21th Street, Suite 721 New York NY 10016
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-5">
                            <span>Phone:</span>
                        </div>
                        <div class="col">
                            <a href="tel://3234120301"  class="white">+ (323) 412-0301</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <span>Email:</span>
                        </div>
                        <div class="col">
                            <a href="mailto:info@yoursite.com" class="white">adrena@111-pr.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <span>Website:</span>
                        </div>
                        <div class="col">
                            <a href="http://111pr.com"  class="white">111pr.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div id="map" class="map"></div>


@endsection

@push('js')

@endpush