@extends('layouts.frontend.app')

@section('title','Press')

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
                    data-stellar-background-ratio="0.5">Press</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>press</span></p>
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
                    Press
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Secured press</h2>
                <p>Here are press we have secured</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/time.jpg')}}" alt="Time">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/lat.jpg')}}" alt="Los Angeles Times">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/blavity.jpg')}}" alt="blavity">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/cnn.jpg')}}" alt="cnn">
            </div>
        </div>
        <br>
        <div class="row d-flex">
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/vice.jpg')}}" alt="vice">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/genius.jpg')}}" alt="genius">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/forbes.jpg')}}" alt="forbes">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/complex.jpg')}}" alt="complex">
            </div>
        </div>
        <br>
        <div class="row d-flex">
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/gq.jpg')}}" alt="GQ">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/billboard.jpg')}}" alt="billboard">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/sports.jpg')}}" alt="sports">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/fader.jpg')}}" alt="fader">
            </div>
        </div>
        <br>
        <div class="row d-flex">
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/essence.jpg')}}" alt="essence">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/entrepreneur.jpg')}}" alt="entrepreneur">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/highs.jpg')}}" alt="highs">
            </div>
            <div class="col-lg-3 d-flex ftco-animate">
                <img class="img-thumbnail press" src="{{asset('assets/images/cbs.jpg')}}" alt="CBS">
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')

@endpush
