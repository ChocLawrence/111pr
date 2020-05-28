@extends('layouts.frontend.app')

@section('title','About')

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
                    data-stellar-background-ratio="0.5">About us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>About Us</span>
                </p>
            </div>
        </div>
    </div>
</section>

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
</section>


<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{ asset('assets/images/about.jpg')}});">
        <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="icon-play"></a>
        </a>
    </div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">About us</h2>
        </div>
        <div>
            <p> Founded in 2017, 1:11 Public Relations Agency serves as one of the most vibrant and multifaceted in
                communications. The full-service agency specializes in public relations, brand development and event
                production. Our renowned clients ranges from: music, sports, TV, technology, entrepreneurial start-up
                companies, arts & culture and fitness/wellness. We strive on producing creativity while maintaining
                originality.
            </p>
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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
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
                                        style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">A small river named Duden flows by their place and supplies it
                                            with the necessary regelialia. It is a paradisematic country, in which
                                            roasted parts of sentences fly into your mouth.</p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/images/person_2.jpg')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">A small river named Duden flows by their place and supplies it
                                            with the necessary regelialia. It is a paradisematic country, in which
                                            roasted parts of sentences fly into your mouth.</p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/images/person_3.jpg')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">A small river named Duden flows by their place and supplies it
                                            with the necessary regelialia. It is a paradisematic country, in which
                                            roasted parts of sentences fly into your mouth.</p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">A small river named Duden flows by their place and supplies it
                                            with the necessary regelialia. It is a paradisematic country, in which
                                            roasted parts of sentences fly into your mouth.</p>
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">A small river named Duden flows by their place and supplies it
                                            with the necessary regelialia. It is a paradisematic country, in which
                                            roasted parts of sentences fly into your mouth.</p>
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
                    style="background-image: url({{ asset('assets/images/gallery-4.jpg')}});">
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