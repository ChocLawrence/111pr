@extends('layouts.frontend.app')

@section('title','Contact')

@section('description', 'Contact 1:11 Public Relations Agency.It serves as one of the most vibrant and multifaceted in
communications.')
@section('keywords', 'branding, PR, 1:11PR,111 PR,brand development,contact us')
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
            <div class="col-md-12 text-center ftco-animate">
                <h1 class="mb-3 bread" style="background-image: url({{ asset('assets/images/bg_1.jpg')}});"
                    data-stellar-background-ratio="0.5">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home.</a></span> <span>Contact</span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section contact-section">
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 text-md-right contact-info ftco-animate">
                <div class="col">
                    <div class="col-md-12 mb-4">
                        <h2 class="h5 font-weight-bold">Contact Information</h2>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-5">
                            <span>Address:</span>
                        </div>
                        <div class="col white">
                            P.O. Box 452234 Los Angeles, CA 90045
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-5">
                            <span>Phone:</span>
                        </div>
                        <div class="col">
                            <a href="tel://3234120301" class="white">+ (323) 412-0301</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <span>Email:</span>
                        </div>
                        <div class="col">
                            <a href="mailto:info@yoursite.com" class="white">hello@111-pr.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <span>Website:</span>
                        </div>
                        <div class="col">
                            <a href="http://111-pr.com" class="white">111-pr.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
                    @csrf
                    @honeypot
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div id="map" class="map"></div>


@endsection

@push('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}

<script>
    @if($errors->any())

        @foreach($errors->all() as $error)

                toastr.error('{{$error}}','Error',{
                    closeButton:true,
                    progressBar:true,
                });

        @endforeach

    @endif
</script>

@endpush
