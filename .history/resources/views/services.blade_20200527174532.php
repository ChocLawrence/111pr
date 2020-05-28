@extends('layouts.frontend.app')

@section('title','Services')

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
                    data-stellar-background-ratio="0.5">Services</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>Services</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-2 order-md-last"
                style='background-image: url({{ asset('assets/images/bg_2-1.jpg')}});'>
            </div>
            <div class="col-md-6 py-5">
                <div class="program d-flex ftco-animate">
                    <div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
                        <span class="flaticon-group"></span>
                    </div>
                    <div class="text ml-5 mr-lg-4 text-lg-right">
                        <h3>Public Relations</h3>
                        <p>Strategic communication process that builds mutually beneficial relationships between
                            organizations and their publics</p>
                    </div>
                </div>
                <div class="program d-flex ftco-animate">
                    <div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
                        <span class="flaticon-woman"></span>
                    </div>
                    <div class="text ml-5 mr-lg-4 text-lg-right">
                        <h3>Brand Development</h3>
                        <p>We manage the process of creating and strengthening your professional services brand. As we
                            help firms
                            develop their brands, we divide the process into three phases</p>
                    </div>
                </div>
                <div class="program d-flex ftco-animate">
                    <div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
                        <span class="flaticon-workout"></span>
                    </div>
                    <div class="text ml-5 mr-lg-4 text-lg-right">
                        <h3> Event Coordination</h3>
                        <p>We meet with clients to work out event details, plan with the client and their team, scout
                            and book locations, food, entertainment, staff and cleanup.</p>
                    </div>
                </div>
                <div class="program d-flex ftco-animate">
                    <div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
                        <span class="flaticon-meditation"></span>
                    </div>
                    <div class="text ml-5 mr-lg-4 text-lg-right">
                        <h3>Event Management & Design</h3>
                        <p>Application of project management to the creation and development of small and/or large-scale
                            events such as festivals, conferences, ceremonies, weddings, formal parties, concerts, or
                            conventions.</p>
                    </div>
                </div>
                <div class="program d-flex ftco-animate">
                    <div class="icon d-flex mr-lg-3 justify-content-center align-items-center order-lg-last">
                        <span class="flaticon-stationary-bike"></span>
                    </div>
                    <div class="text ml-5 mr-lg-4 text-lg-right">
                        <h3>Philanthropic Management</h3>
                        <p>We work with organizations that facilitate all aspects of grant making and donations.</p>
                    </div>
                </div>
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
                <h2 class="mb-3">More Services</h2>
                <p>At PR-Agency, we offer the services listed both above and below</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/sm.jpg')}});">
                    <div class="title p-4">
                        <h3>Social Media Strategy & Management</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">SMS & M</span>
                            <h3><a href="#">Social Media Strategy & Management</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/sp.jpg')}});">
                    <div class="title p-4">
                        <h3> Sponsorship & Partnership Opportunities</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">S & PO</span>
                            <h3><a href="#"> Sponsorship & Partnership Opportunities</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/dm.jpg')}});">
                    <div class="title p-4">
                        <h3> Digital Marketing</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">DM</span>
                            <h3><a href="#"> Digital Marketing</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/gs.jpg')}});">
                    <div class="title p-4">
                        <h3>Gifting Suites</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">GS</span>
                            <h3><a href="#">Gifting Suites</a></h3>
                            {{-- <p>Far far away, behind the word mountains, far from the countries.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url({{ asset('assets/images/cm.jpg')}});">
                    <div class="title p-4">
                        <h3>Crisis Management</h3>
                        {{-- <span>Behind the word mountains</span> --}}
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        {{-- <a href="#" class="btn-custom px-4 py-2">Enroll Now</a> --}}
                        <div>
                            <span class="price">CM</span>
                            <h3><a href="#">Crisis Management</a></h3>
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

    </div>
</section>


@endsection

@push('js')

@endpush