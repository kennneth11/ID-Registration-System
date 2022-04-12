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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }} ">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/About') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/FAQ') }}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/ContactUs') }}">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="faq">
    <div class="header text-center" >
        <h1>Frequently Asked Questions (FAQ)</h1>
    </div> 
    <div class="container" style="height: auto;">
            <div class="row" style="height: auto;">
                <div class="col-sm-12 col-lg-6 content" style="height: auto;">
                    <h2>Employee</h2>

                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1">
                        <h5>How to get my prisms ID or SIS ID?</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample1">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>

                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="true" aria-controls="collapseExample2">
                        <h5>What if I can't verify my information?</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample2">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>

                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="true" aria-controls="collapseExample3">
                        <h5>How to reset my password?</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample3">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>

                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="true" aria-controls="collapseExample4">
                        <h5>Your account is already registered</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample4">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-6 content" style="height: auto;">
                    <h2>Student</h2>
                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="true" aria-controls="6">
                        <h5>How to register?</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample6">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>

                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="true" aria-controls="collapseExample7">
                        <h5>What if I forgot my password?</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample7">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>

                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="true" aria-controls="collapseExample8">
                        <h5>What if I forgot my Email Address?</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample8">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>

                    <div class="questions-item" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="true" aria-controls="collapseExample5">
                        <h5>Where will I get a copy of my "O.R. No." or "Registration No."?</h5>
                    </div>
                    <div class="collapse multi-collapse" id="collapseExample5">
                        <div class="card card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non dolor dolor. Aliquam iaculis est lobortis est tristique varius. Nam porttitor feugiat augue vel posuere. Donec vel turpis venenatis, finibus ipsum pharetra, consequat nunc.
                        </div>
                    </div>
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
    <footer class="footer-fix text-center d-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" id="homepage-footer">
        <p class="d-xl-flex justify-content-xl-center">Copyright 2021 - 2022 ID Registration System. All Rights Reserverd. <span><a href="#"> Privacy Police</a></span>&nbsp;|&nbsp;<span><a href="#">Terms of Service</a></span>&nbsp;</p>
    </footer>
@endsection