@extends('layouts.frontend.app')

@section('title','Home')

@push('css')
@endpush

@section('content')



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
          data-stellar-background-ratio="0.5">1:11 PR<br>AGENCY</h1>
        <h2>Growing together</h2>
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
          style="background-image: url({{ asset('assets/images/pm.jpg')}});">
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

<section class="ftco-section">
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
          <div class="img" style="background-image: url({{ asset('assets/images/trainer-1.jpg')}});"></div>
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
          <div class="img" style="background-image: url{{ asset('assets/images/trainer-2.jpg')}});"></div>
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
          <div class="img order-xl-last" style="background-image: url({{ asset('assets/images/trainer-3.jpg')}});">
          </div>
          <div class="text py-4 px-5 ftco-animate">
            <span class="subheading">Lead Trainer</span>
            <h3><a href="#">James Buffer</a></h3>
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
          <div class="img order-xl-last" style="background-image: url({{ asset('assets/images/trainer-4.jpg')}});">
          </div>
          <div class="text py-4 px-5 ftco-animate">
            <span class="subheading">Trainer</span>
            <h3><a href="#">Maricar Collins</a></h3>
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
</section>

<section class="ftco-section testimony-section" style="background-image: url({{ asset('assets/images/bg_4.jpg')}});"
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
        <p>Some of our clients had some good things to say about 1:11 PR  Agency</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 ftco-animate">
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">1:11 PR Agency helped market my business and we had a growth of 4% last year.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_2.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">Our brand was built with 1:11 PR Agency and they were always there to guide us all the way</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_3.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">We organized a donation event in our locality and the angency ensured it was done to standard</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">With the help of 1:11 PR Agency, news about our product spread across in a very short time.We remain grateful</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-4">Our company had a serious managerial decision which caused alot to go wrong.1:11 PR-Agency handled the crisis with great professionalism.</p>
                    <p class="name">Roger Scott</p>
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
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
        <form action="#" class="appointment-form">
          <div class="d-md-flex">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group ml-md-4">
              <input type="text" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group ml-md-4">
              <input type="text" class="form-control" placeholder="Phone">
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group ml-md-4">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
            </div>
          </div>
        </form>
        <a href="https://calendly.com/111-pr/introductory-call" target="_blank" class="btn btn-primary py-3 px-4">
          Make Appointment
        </a>
      </div>
    </div>
  </div>
</section>

<section class="ftco-gallery">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 ftco-animate">
        <a href="gallery.html" class="gallery img d-flex align-items-center"
          style="background-image: url({{ asset('assets/images/gallery-1.jpg')}});">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="gallery.html" class="gallery img d-flex align-items-center"
          style="background-image: url({{ asset('assets/images/gallery-2.jpg')}});">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="gallery.html" class="gallery img d-flex align-items-center"
          style="background-image: url({{ asset('assets/images/gallery-3.jpg')}});">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="gallery.html" class="gallery img d-flex align-items-center"
          style="background-image: url{{ asset('assets/images/gallery-4.jpg')}});">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection

@push('js')

@endpush