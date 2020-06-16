@extends('layouts.frontend.app')

@section('title','Home')

@section('description', 'Public Relations Agency aids companies spread their brand.It serves as one of the most vibrant
and multifaceted in communications.')
@section('keywords', 'branding, PR, 1:11PR,111 PR,brand development,home 111 PR')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@push('css')
@endpush

@section('content')

@if(session()->has('message'))
<div class="alert-box alert alert-success alert-dismissible" style="z-index:999">
    <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong></strong>{{session()->get('message')}}
</div>
@endif



<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url({{ asset('assets/images/bg_2.jpg')}});"
        data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end">
            {{-- <h3 class="v">
              <a href="https://vimeo.com/45830194" class="popup-vimeo">
                  <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-play"></span>
                  </div>
                  <span>Growing together</span> <br>Watch Our Video</a>
          </h3> --}}
            <div class="col-md-12 text-center ftco-animate">
                <h1 class="mt-5" style="background-image: url({{ asset('assets/images/bg_1.jpg')}});"
                    data-stellar-background-ratio="0.5">1:11 PR<br></h1>
                <h2>WE LOOK
                    FORWARD TO
                    BUILDING WITH

                    YOU!</h2>
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
                    Services
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Services Offered</h2>
                <p>At PR-Agency, we offer the services listed</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/pr.jpg')}});">
                    <div class="title p-4">
                        <h3>Public Relations</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">PR</span>
                            <h3><a href="#">Public Relations</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/bd.jpg')}});">
                    <div class="title p-4">
                        <h3>Brand Development</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">BD</span>
                            <h3><a href="#">Brand Development</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/ec.jpg')}});">
                    <div class="title p-4">
                        <h3>Event Coordination</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">EC</span>
                            <h3><a href="#">Event Coordination</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/em.jpg')}});">
                    <div class="title p-4">
                        <h3>Event Management & Design</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">EMD</span>
                            <h3><a href="#">Event Management & Design</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/pm.png')}});">
                    <div class="title p-4">
                        <h3>Philanthropic Management</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">PM</span>
                            <h3><a href="#">Philanthropic Management</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/prd.jpg')}});">
                    <div class="title p-4">
                        <h3>Press Release Distribution</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">PRD</span>
                            <h3><a href="#">Press Release Distribution</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="form-group ml-md-4">
                <a href="{{route('services')}}" class="btn btn-primary py-3 px-4"> More services</a>
            </div>
        </div>
    </div>
</section>

{{--
<section class="ftco-counter ftco-bg-dark img" id="section-counter"
  style="background-image: url({{ asset('assets/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="5000">0</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="4560">0</strong>
                            <span>Perfect Bodies</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="570">0</strong>
                            <span>Working Hours</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="900">0</strong>
                            <span>Success Stories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}

{{-- <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">
          <i class="db-left"></i>
          Team
          <i class="db-right"></i>
        </span>
        <h2 class="mb-3">Our Team</h2>
        <p>We are a team of dedicated professionals always at your service</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 d-flex">
        <div class="coach d-sm-flex align-items-stretch">
          <div class="img" style="background-image: url({{ asset('assets/images/adrena.jpg')}});"></div>
<div class="text py-4 px-5 ftco-animate">
    <span class="subheading">Team Lead</span>
    <h3><a href="#">Adrena Trice</a></h3>
    <p></p>
    <ul class="ftco-social-media d-flex mt-4">
        <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                    class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                    class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                    class="icon-instagram"></span></a></li>
    </ul>
    <p></p>
</div>
</div>
</div>
<div class="col-lg-6 d-flex">
    <div class="coach d-sm-flex align-items-stretch">
        <div class="img" style="background-image: url({{ asset('assets/images/smith.jpg')}});"></div>
        <div class="text py-4 px-5 ftco-animate">
            <span class="subheading">Lead Trainer</span>
            <h3><a href="#">Leonard Smith</a></h3>
            <p></p>
            <ul class="ftco-social-media d-flex mt-4">
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-instagram"></span></a></li>
            </ul>
            <p></p>
        </div>
    </div>
</div>
<div class="col-lg-6 d-flex">
    <div class="coach d-sm-flex align-items-stretch">
        <div class="img order-xl-last" style="background-image: url({{ asset('assets/images/precious.jpg')}});">
        </div>
        <div class="text py-4 px-5 ftco-animate">
            <span class="subheading">Brand Developer</span>
            <h3><a href="#">Precious Smath</a></h3>
            <p></p>
            <ul class="ftco-social-media d-flex mt-4">
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-instagram"></span></a></li>
            </ul>
            <p></p>
        </div>
    </div>
</div>
<div class="col-lg-6 d-flex">
    <div class="coach d-sm-flex align-items-stretch">
        <div class="img order-xl-last" style="background-image: url({{ asset('assets/images/carol.jpg')}});">
        </div>
        <div class="text py-4 px-5 ftco-animate">
            <span class="subheading">Event Manager</span>
            <h3><a href="#">Maricar Carol</a></h3>
            <p></p>
            <ul class="ftco-social-media d-flex mt-4">
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="mr-2 d-flex justify-content-center align-items-center"><span
                            class="icon-instagram"></span></a></li>
            </ul>
            <p></p>
        </div>
    </div>
</div>
</div>
</div>
</section> --}}

<section class="ftco-section testimony-section" style="background-image: url({{ asset('assets/images/bg_1.jpg')}});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Testimonial
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">What People Say</h2>
                <p>Some of our clients had some good things to say about 1:11 PR Agency</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate">
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/images/logo.png')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">"We contracted 1:11 PR Agency for assistance with a regional
                                            event. The agency was executed results in a timely manner prior to our
                                            original deadline. Our company was impressed with their ability to align
                                            with our precise vision. We look forward to working with 1:11 again."</p>
                                        <p class="name"></p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/images/logo.png')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">" Thank you 1:11 for always being efficient and transparent with
                                            communications & development. Within a month, 1:11 was able to rebrand for
                                            our holiday campaign. If you need creative and timely results, 1:11 is the
                                            agency to partner with."</p>
                                        <p class="name"></p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/images/logo.png')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">"Our social media strategy and consultation was highly effective
                                            with not being limited to the COVID-19/pandemic delay. 1:11 PR was able to
                                            make revisions and provide creative suggestions when we were in need of a
                                            renewed social media plan and crisis management. 1:11 PR are life- savers.
                                            Thank you for your services."</p>
                                        <p class="name"></p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/imageslogo.png')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">"Our parntership with 1:11 PR Agency is everlasting. Each year,
                                            we seek assistance from 1:11 as we rollout a renewed project. Thank you for
                                            always consulting at our earliest convience and being there for every need."
                                        </p>
                                        <p class="name"></p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">
          <i class="db-left"></i>
          Read Articles
          <i class="db-right"></i>
        </span>
        <h2 class="mb-3">Recent Blog</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
          texts.</p>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-lg-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20"
            style="background-image: url({{ asset('assets/images/image_1.jpg')}});">
</a>
<div class="text py-4 d-flex">
    <div class="meta text-center">
        <span class="day">04</span>
        <span class="mos">January</span>
        <span class="yr">2019</span>
    </div>
    <div class="desc">
        <h3 class="heading mt-2"><a href="#">Crossfit Harder Workout</a></h3>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    </div>
</div>
</div>
</div>
<div class="col-lg-4 d-flex ftco-animate">
    <div class="blog-entry align-self-stretch">
        <a href="blog-single.html" class="block-20"
            style="background-image: url({{ asset('assets/images/image_2.jpg')}});">
        </a>
        <div class="text py-4 d-flex">
            <div class="meta text-center">
                <span class="day">03</span>
                <span class="mos">January</span>
                <span class="yr">2019</span>
            </div>
            <div class="desc">
                <h3 class="heading mt-2"><a href="#">Crossfit Harder Workout</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 d-flex ftco-animate">
    <div class="blog-entry align-self-stretch">
        <a href="blog-single.html" class="block-20"
            style="background-image: url({{ asset('assets/images/image_3.jpg')}});">
        </a>
        <div class="text py-4 d-flex">
            <div class="meta text-center">
                <span class="day">02</span>
                <span class="mos">January</span>
                <span class="yr">2019</span>
            </div>
            <div class="desc">
                <h3 class="heading mt-2"><a href="#">Crossfit Harder Workout</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section> --}}


<section class="ftco-appointment">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-lg-5 d-flex align-self-stretch">
                <div id="map"></div>
            </div>
            <div class="col-lg-7 appointment ftco-animate">
                <div class="heading-section ftco-animate">
                    <h2 class="mb-3">Contact With Us</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the
                        blind texts.</p>
                </div>
                <form method="POST" action="{{ route('contact.store') }}" class="appointment-form">
                    @csrf
                    @honeypot
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group ml-md-9">
                            <textarea id="" cols="30" rows="8" class="form-control" placeholder="Message"
                                name="message"></textarea>
                        </div>
                        <div class="form-group ml-md-3">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <a href="https://calendly.com/111-pr/introductory-call" target="_blank"
                                class="btn btn-primary py-3 px-4">
                                Book Appointment
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>


@endsection

@push('js')

@endpush
