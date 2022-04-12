@extends('layouts.layout')

@section('content')
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white text-capitalize clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img id="prio-logo" class="logos" src="{{ asset('images/prio-logo-black.png') }}">
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
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/') }} ">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/About') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/FAQ') }}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/ContactUs') }}">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="banner">
    <div class="container" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col-sm-12 col-lg-6" style="height: auto;">
                    <div class="text-start d-xxl-flex flex-wrap align-items-xxl-center" id="banner-content-container">
                        <h2>ID Registration System<span>&nbsp;Version 1</span></h2>
                        <h3>Faculty, staff, and students can register for a new ID through this online too</h3>
                        <p><i class="fa fa-dot-circle-o"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><i class="fa fa-dot-circle-o"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><i class="fa fa-dot-circle-o"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="row text-center" id="banner-buttons-container">
                            <div class="col"><a href="{{ route('login') }}" class="btn btn-primary" id="btn-login" type="button"><i class="fa fa-sign-in"></i>LOGIN</a></div>
                            <div class="col"><a href="{{ route('registerto') }}"  class="btn btn-primary" id="btn-register" type="button"><i class="fa fa-user"></i>REGISTER</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 text-end d-flex justify-content-center" id="image-container" style="margin-left: 0;margin-right: 0;padding-right: 29px;padding-left: auto;height: 55vh;">
                    <img class="d-xxl-flex justify-content-xxl-center align-items-xxl-end" id="banner-pic" src="{{ asset('images/banner-hands.png') }}">
                </div>
            </div>
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
    <footer class="text-center d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" id="homepage-footer">
        <p class="d-xl-flex justify-content-xl-center">Copyright 2021 - 2022 ID Registration System. All Rights Reserverd. <span><a href="#"> Privacy Police</a></span>&nbsp;|&nbsp;<span><a href="#">Terms of Service</a></span>&nbsp;</p>
    </footer>
@endsection