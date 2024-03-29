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
          <div class="row justify-content-center mb-5">
        <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">
                <i class="db-left"></i>
                Pricing For Courses 
                <i class="db-right"></i>
            </span>
          <h2 class="mb-3">Pricing For Courses</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="pricing-wrap ftco-animate img" style="background-image: url({{ asset('assets/images/program-1.jpg')}});">
                      <div class="title p-4">
                          <h3>Weight Lifting</h3>
                          <span>Behind the word mountains</span>
                      </div>
                      <div class="text p-4 d-flex align-items-end">
                          <a href="#" class="btn-custom px-4 py-2">Enroll Now</a>
                          <div>
                              <span class="price">$240.00</span>
                              <h3><a href="#">Weight Lifting</a></h3>
                              <p>Far far away, behind the word mountains, far from the countries.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="pricing-wrap ftco-animate active img" style="background-image: url({{ asset('assets/images/program-2.jpg')}});">
                      <div class="title p-4">
                          <h3>Weight Lifting</h3>
                          <span>Behind the word mountains</span>
                      </div>
                      <div class="text p-4 d-flex align-items-end">
                          <a href="#" class="btn-custom px-4 py-2">Enroll Now</a>
                          <div>
                              <span class="price">$240.00</span>
                              <h3><a href="#">Weight Lifting</a></h3>
                              <p>Far far away, behind the word mountains, far from the countries.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="pricing-wrap ftco-animate img" style="background-image: url({{ asset('assets/images/program-3.jpg')}});">
                      <div class="title p-4">
                          <h3>Weight Lifting</h3>
                          <span>Behind the word mountains</span>
                      </div>
                      <div class="text p-4 d-flex align-items-end">
                          <a href="#" class="btn-custom px-4 py-2">Enroll Now</a>
                          <div>
                              <span class="price">$240.00</span>
                              <h3><a href="#">Weight Lifting</a></h3>
                              <p>Far far away, behind the word mountains, far from the countries.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="pricing-wrap img" style="background-image: url({{ asset('assets/images/program-4.jpg')}});">
                      <div class="title p-4">
                          <h3>Weight Lifting</h3>
                          <span>Behind the word mountains</span>
                      </div>
                      <div class="text p-4 d-flex align-items-end">
                          <a href="#" class="btn-custom px-4 py-2">Enroll Now</a>
                          <div>
                              <span class="price">$240.00</span>
                              <h3><a href="#">Weight Lifting</a></h3>
                              <p>Far far away, behind the word mountains, far from the countries.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="pricing-wrap ftco-animate img" style="background-image: url({{ asset('assets/images/program-5.jpg')}});">
                      <div class="title p-4">
                          <h3>Weight Lifting</h3>
                          <span>Behind the word mountains</span>
                      </div>
                      <div class="text p-4 d-flex align-items-end">
                          <a href="#" class="btn-custom px-4 py-2">Enroll Now</a>
                          <div>
                              <span class="price">$240.00</span>
                              <h3><a href="#">Weight Lifting</a></h3>
                              <p>Far far away, behind the word mountains, far from the countries.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="pricing-wrap ftco-animate img" style="background-image: url({{ asset('assets/images/program-6.jpg')}});">
                      <div class="title p-4">
                          <h3>Weight Lifting</h3>
                          <span>Behind the word mountains</span>
                      </div>
                      <div class="text p-4 d-flex align-items-end">
                          <a href="#" class="btn-custom px-4 py-2">Enroll Now</a>
                          <div>
                              <span class="price">$240.00</span>
                              <h3><a href="#">Weight Lifting</a></h3>
                              <p>Far far away, behind the word mountains, far from the countries.</p>
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