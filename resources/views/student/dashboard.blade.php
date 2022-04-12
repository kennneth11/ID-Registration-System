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
                <p>Student</p>
            </div>
        </div>
        <nav class="navbar navbar-dark navbar-expand side-container" style="padding: 0; margin:0;">
            <div >
                <ul class="navbar-nav mr-auto flex-column mr-auto" style="width: 100%;">
                    <li class="nav-item" style="width: 100%;"><a class="nav-link d-flex align-items-center active" href="{{ route('dashboard') }}" style="width: 100%;padding: 12px;">
                    <div class="link-icons-container" style="width: 25%;"><i class="fa fa-home link-icons"></i></div>Dashboard</a>
                    </li>
                    <li class="nav-item" style="width: 100%;"><a class="nav-link d-flex align-items-center" href="index.html" style="width: 100%;padding: 12px;">
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
        <div class="container-fluid" id="content-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tbl-container">
                        <h1>Student Dashboard</h1>
                        <div class="tab-content">
                            <div class="position-relative m-4">
                                <div class="progress" style="height: 1px;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                            </div>
                            <p>Paragraph</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
