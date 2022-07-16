@extends('layouts.front.app')
@push('extended-css')
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/ext-toastr.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <!-- Start Breadcrumb                                                                                                           ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light"
        style="background-image: url(assets/img/contact.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('front.home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Contact Area
                                                                                                                                                                            ============================================= -->
    <div class="contact-area default-padding">

        <div class="container">
            <div class="contact-items">
                <div class="row">
                    <div class="col-lg-7 contact-box">
                        <div class="form-items">
                            <h5>Contact Us</h5>
                            <h2>Our agent will <br>Get in touch with you soon.</h2>
                            <!-- Session Status -->
                            <x-auth-session-status class="mt-4 mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form id="contactForm" method="POST" action="{{ route('front.contact.submit') }}" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name *"
                                                type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email *"
                                                type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                                type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Query *" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit">
                                        Send Now
                                    </button>
                                    <span class="mt-3 ml-2 spinner d-none">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 left-info">
                        <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="info">
                                    <h5>Location</h5>
                                    <p>
                                        Unit 565, Chamber Business Centre, Chamber Rd. Oldham
                                        OL8 4QQ
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="info">
                                    <h5>Make a Call</h5>
                                    <p>
                                        +44 161 621 9970 <br> +92 349 4684544
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info">
                                    <h5>Send a Mail</h5>
                                    <p>
                                        info@eco4grants.com <br>
                                        admin@eco4grants.com
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Star Google Maps ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=OL8 4QQ&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->
@endsection
@push('extended-js')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    @if (Session::has('status'))
        <script>
            $(function() {
                toastr['success'](
                    "{{ Session::get('status') }}",
                    "Success Notification", {
                        closeButton: true,
                        tapToDismiss: false,
                        progressBar: true,
                    }
                );
            });
        </script>
    @elseif(Session::has('error'))
        <script>
            $(function() {
                toastr['error'](
                    "{{ Session::get('error') }}",
                    "Error Notification", {
                        closeButton: true,
                        tapToDismiss: false,
                        progressBar: true,
                    }
                );
            });
        </script>
    @endif
@endpush
