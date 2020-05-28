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
                    data-stellar-background-ratio="0.5">Bookings</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>Bookings</span>
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
            Bookings
            <i class="db-right"></i>
          </span>
          <h2 class="mb-3">Book an appointment</h2>
          <p>1:11 PR Agency will always be there to talk.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-12 d-flex">
          <div class="coach d-sm-flex align-items-stretch">
            <div class="img" style="background-image: url({{ asset('assets/images/trainer-1.jpg')}});"></div>
            <div class="text py-4 px-5 ftco-animate">
              <span class="subheading">Anyday, Anytime</span>
              <h3><a href="#">Reach out to us</a></h3>
              <p></p>
              <ul class="ftco-social-media d-flex mt-4">
                <li class="ftco-animate"><a href="https://calendly.com/111-pr/introductory-call" class="mr-2 d-flex justify-content-center align-items-center"><span
                      class="icon-twitter"></span>Make Appointment</a></li>
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