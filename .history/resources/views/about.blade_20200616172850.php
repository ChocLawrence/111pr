@extends('layouts.frontend.app')

@section('title','About')

@section('description', '1:11 Public Relations Agency serves as one of the most vibrant and multifaceted in
communications.')
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
                                <strong class="number" data-number="500">0</strong>
                                <span>Solidified Media Contacts</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="47">0</strong>
                                <span>Brand Collaborations</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="32">0</strong>
                                <span>Verifiable Testimonials from Clients in 2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="15">0</strong>
                                <span>Sucured Press</span>
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
        {{-- <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="icon-play"></a>
        </a> --}}
    </div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">MEET OUR FOUNDER</h2>
        </div>
        <div>
            <p>Adrena A. Trice is a visionary and multipreneur. With over almost 10 years of integrated communications
                expertise in public relations, media/radio advertising, brand partnerships & sponsorship and event
                production.
            </p>
            <p>
                One of the main aspirations in her career is by protecting one’s expressive abilities while maintaining
                originality. She has collaborated with multi-billion dollar enterprises in addition to a committed
                diligence for social justice and philanthropy in underserved communities.
            </p>
            <p>In addition, Adrena specializes in creating award-winning content marketing case studies for start-ups,
                tech ventures, philanthropic endeavors, top executive music labels and sports.</p>
            <p>Adrena is currently serving as Founder and Creative Director of 1:11 PR Agency. Located in Los Angeles
                and Chicago, the agency was founded in 2017 focusing on the multifaceted evolution of industries in
                entertainment, arts, food/health, technology, TV/music, sports and entrepreneurship.</p>
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
                    Values
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">OUR VISION FOR YOU</h2>
                <p>Founded in 2017, 1:11 PR Agency primarily focused on music and entertainment. In most recent years,
                    we have extended our services in technology, arts & culture, sports, fashion and other multimedia
                    industries. We strive for all of our clients to produce creativity for the overall brand while
                    maintaining an organic and original approach for execution of success. We love to brainstorm and
                    align our values and missions for the execution of our clients’ needs.
                </p>
            </div>
        </div>
        {{-- <div class="row justify-content-center">
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
            <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_2.jpg')}})">
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
            <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_3.jpg')}})">
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
            <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
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
            <div class="user-img mb-4" style="background-image: url({{ asset('assets/images/person_1.jpg')}})">
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
    </div> --}}
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('assets/images/gallery-1.png')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('assets/images/gallery-2.png')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('assets/images/gallery-3.png')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="#" class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('assets/images/gallery-4.png')}});">
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
