@extends('layouts.frontend.app')

@section('title','Press')

@push('css')
@endpush

@section('content')

<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url({{ asset('assets/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
        <div class="col-md-12 text-center ftco-animate">
          <h1 class="mb-3 bread" style="background-image: url({{ asset('assets/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">Press</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>press</span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-lg-3 d-flex ftco-animate">
            <img src="{{asset('assets/images/image_1.jpg')}}" alt="">
        </div>
        <div class="col-lg-3 d-flex ftco-animate">
            <img src="{{asset('assets/images/image_1.jpg')}}" alt="">
        </div>
        <div class="col-lg-3 d-flex ftco-animate">
            <img src="{{asset('assets/images/image_1.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection

@push('js')

@endpush