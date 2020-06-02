@extends('layouts.frontend.app')

@section('title','Bookings')

@section('description', 'Book 1:11 Public Relations Agency. It serves as one of the most vibrant and multifaceted in communications.')
@section('keywords', 'branding, PR, 1:11PR,111 PR,brand development')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')


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
            <div class="img" style="background-image: url({{ asset('assets/images/bookings.jpg')}});"></div>
            <div class="text py-4 px-5 ftco-animate">
              <span class="subheading">Anyday, Anytime</span>
              <h3><a href="#">Reach out to us</a></h3>
              <p></p>
              <div class="d-md-flex">
                <div class="form-group">
                  <a href="https://calendly.com/111-pr/introductory-call" target="_blank" class="btn btn-primary py-3 px-4">
                    Book Appointment
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

@endsection

@push('js')

@endpush