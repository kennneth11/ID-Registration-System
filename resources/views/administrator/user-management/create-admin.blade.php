@extends('layouts.sidebar')

@section('content')

<div id="wrapper" class="wrapper">
    <div id="sidebar-wrapper">
        <div id="brand"><a class="d-flex align-items-center" href="#" style="height: 56px;"><img src="{{ asset('images/prio-logo-black.png') }}">
                <div class="d-flex align-items-center">
                    <p class="d-flex ">ID Registration System</p>
                </div>
            </a></div>
        <div class="container " id="profile-details" >
            <div class="d-flex justify-content-center "><img src="{{ asset('images/profile.png') }}"></div>
            <div class="text-center">
                <p>{{ Auth::user()->name }}</p>
                <p>{{ Auth::user()->email }}</p>
                <p>administrator</p>
            </div>
        </div>
        <nav class="navbar navbar-dark navbar-expand side-container" style="padding: 0; margin:0;">
            <div >
                <ul class="navbar-nav mr-auto flex-column mr-auto" style="width: 100%;">
                    <li class="nav-item" style="width: 100%;"><a class="nav-link d-flex align-items-center" href="{{ route('dashboard') }}" style="width: 100%;padding: 12px;">
                    <div class="link-icons-container" style="width: 25%;"><i class="fa fa-home link-icons"></i></div>Dashboard</a>
                    </li>
                    <li class="nav-item" style="width: 100%;"><a class="nav-link d-flex align-items-center active" href="{{ route('dashboard.user-management') }}" style="width: 100%;padding: 12px;">
                        <div class="link-icons-container" style="width: 25%;"><i class="fa fa-users link-icons"></i></div>User Management</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <nav class="navbar navbar-light navbar-expand-md d-lg-flex" style="color: rgb(33, 37, 41);height: 56px;">
        <div class="container-fluid">
            <a class="btn btn-link icon-container" role="button" id="menu-toggle" href="#menu-toggle" style="background: rgb(255,255,255);">
                <i class="fa fa-bars" style="color: none;font-size: 26px;"></i>
            </a>
            <div class="d-flex justify-content-end align-items-center " id="navcol-1">
                <div class="btn-group nav-down">
                <button class=" dropdown-toggle nav-drop" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    My Account
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form></li>
                </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="page-content-wrapper">
        <div class=" container-fluid" id="content-container">
        <section class="d-flex justify-content-center align-items-center" id="login-section">
        <div class="container text-start d-flex justify-content-center align-items-center" style="width: 1315px;">
            <form id="login-form" method="POST" action="{{ route('dashboard.user-management.creating') }}">
                @csrf
                <div id="heading-container">
                    <h2 class="text-center" id="heading-text">ID Registration System</h2>
                </div>
                <div id="body-container">
                    <div class="text-center" id="logo-container" style="min-width: 0px;margin: 0px;margin-top: 0;margin-bottom: 0px;"><img id="login-logo" src="{{ asset('images/276134669_739682396993313_6310725528540388378_n.png') }}"></div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control input-data @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control input-data @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control input-data @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password" >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="input-title">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" type="password" class="form-control input-data @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required >
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div id="note">
                        <h6 style="font-size: 15px;">Note:&nbsp;</h6>
                        <p id="note-content" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at quam neque. Vivamus suscipit at orci at lobortis. Vivamus nulla sem, fermentum et sodales sed, rutrum vitae nunc. Integer eleifend nunc ut dictum auctor.</p>
                    </div>
                  
                    <div class="mb-3">
                        <button class="btn btn-primary" id="singin" type="submit" style="width: 100%;margin-top:50px;">{{ __('Register') }}</button>
                    </div>

                </div>
            </form>
        </div>
    </section>
        </div>
    </div>
</div>
@endsection
