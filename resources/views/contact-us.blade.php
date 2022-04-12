@extends('layouts.layout')

@section('content')
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white text-capitalize clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img id="prio-logo" class="logos" src="{{ asset('images/276134669_739682396993313_6310725528540388378_n.png') }}">
            </a>
            <div id="logo-text-container">
                <a class="logo-text" href="{{ url('/') }}">
                    <div>
                        <p id="title">ID Registration System</p>
                        <p id="sub-title">Central Mindanao University</p>
                    </div>
                </a>
            </div>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }} ">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/About') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/FAQ') }}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/ContactUs') }}">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="contact-us">
        <div class="container text-center">
            <h3>Contact Us<h3>
            <h5>Central Mindanao University<h5>

            <h4>CMU-PRIO<h5>
            <h5><span>Email Address:</span> prio@cmu.edu.ph<h5>


            <form id="contactForm">
                <div class="mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                <div class="mb-3">
                    <input class="form-control" id="subject" type="text" placeholder="subject" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>

                <div class="mb-3">
                    <input class="form-control" id="mobile-number" type="text" placeholder="Mobile Number" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>


                <div class="mb-3">
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                </div>

                <!-- Form submissions success message -->
                <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">Form submission successful!</div>
                </div>

                <!-- Form submissions error message -->
                <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>

                <div class="mb-3 d-flex justify-content-center">
                <button class="btn btn-primary " type="submit">Submit</button>
                </div>

               </form>
            </div>
    </section>
    <footer class="text-center d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" id="homepage-footer">
        <p class="d-xl-flex justify-content-xl-center">Copyright 2021 - 2022 ID Registration System. All Rights Reserverd. <span><a href="#"> Privacy Police</a></span>&nbsp;|&nbsp;<span><a href="#">Terms of Service</a></span>&nbsp;</p>
    </footer>
@endsection