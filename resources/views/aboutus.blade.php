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
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/About') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/FAQ') }}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/ContactUs') }}">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="banner" class="about-banner">
        <div class="container justify-content-center" style="height: 100%;">
            <div id="about-content-container">
                <div class="d-flex justify-content-center">
                    <img id="prio-logo2" class=" aboutus-section" src="{{ asset('images/276012470_471884367955910_7014762415725651949_n.png') }}">
                </div>
                <div class="text-center">
                    <h2 id="about-h2">What is ID Registration System?</h2>
                    <h3 id="about-h3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut tristique mi, at sagittis sem. Phasellus porttitor justo nec ligula hendrerit, quis efficitur orci viverra. Aenean fringilla euismod urna nec ullamcorper. Aliquam ligula dui, aliquet et ullamcorper id, blandit nec sapien.</h3>
                <div>
            <div>
        </div>
    </section>
    <section id="info">
        <div class="container">
            <div class="row" style="margin-right: 0;margin-left: 0;">
                <div class="col-md-4">
                    <div class="d-flex Info-container"><img class="info-icon" src="{{ asset('images/248945826_413180800372821_9051674430020498019_n.png') }}">
                        <div>
                            <h2 class="info-heading">Faculty</h2>
                            <h4 class="text-start d-xxl-flex align-items-xxl-center info-sub-heading">Academic staff of the institution</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex Info-container"><img class="info-icon" src="{{ asset('images/275516876_7211680462235629_6804606541325062277_n.png') }}">
                        <div>
                            <h2 class="info-heading">Staff</h2>
                            <h4 class="text-start d-xxl-flex align-items-xxl-center info-sub-heading">Administrative staff of the organisation</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex Info-container"><img class="info-icon" src="{{ asset('images/273820326_5174488945965264_8445855702524086490_n.png') }}">
                        <div>
                            <h2 class="info-heading">Student</h2>
                            <h4 class="text-start d-xxl-flex align-items-xxl-center info-sub-heading">Person enrolled in a educational institution</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" id="homepage-footer"  >
        <p class="d-xl-flex justify-content-xl-center">Copyright 2021 - 2022 ID Registration System. All Rights Reserverd. <span><a href="#"> Privacy Police</a></span>&nbsp;|&nbsp;<span><a href="#">Terms of Service</a></span>&nbsp;</p>
    </footer>

@endsection