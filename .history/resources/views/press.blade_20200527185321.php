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
        <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
          </div>
        </div>
        <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
          </div>
        </div>
        <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
          </div>
        </div>

        <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
            </a>
          </div>
        </div>
        <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_5.jpg');">
            </a>
          </div>
        </div>
        <div class="col-lg-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
            <div class="img block-20" style="background-image: url('images/image_6.jpg');">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('js')

@endpush