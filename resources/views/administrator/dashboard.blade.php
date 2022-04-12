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
                    <li class="nav-item" style="width: 100%;"><a class="nav-link d-flex align-items-center active" href="{{ route('dashboard') }}" style="width: 100%;padding: 12px;">
                    <div class="link-icons-container" style="width: 25%;"><i class="fa fa-home link-icons"></i></div>Dashboard</a>
                    </li>
                    <li class="nav-item" style="width: 100%;"><a class="nav-link d-flex align-items-center" href="{{ route('dashboard.user-management') }}" style="width: 100%;padding: 12px;">
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
            <h2>Dashboard</h2>
            <div class="row" >
                <div class="col-md-3">
                    <div class="small-section">
                        <h3>ID Printed</h3>
                        
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="small-section">
                        <h3>ID request</h3>
                        
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="small-section">
                        
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tbl-container">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-requested-tab" data-bs-toggle="tab" data-bs-target="#nav-requested" type="button" role="tab" aria-controls="nav-requested" aria-selected="true">Requested</button>
                                <button class="nav-link" id="nav-printed-tab" data-bs-toggle="tab" data-bs-target="#nav-printed" type="button" role="tab" aria-controls="nav-printed" aria-selected="false">Printed</button>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-requested" role="tabpanel" aria-labelledby="nav-requested-tab">
                                <h3>ID Requested list</h3>
                                <table class="table table-striped">
                                <tr>
                                    <th>Transation #</th>
                                    <th>Name</th>
                                    <th>OR #</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Alfreds Futterkiste</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Centro comercial Moctezuma</td>
                                    <td>1</td>
                                </tr>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="nav-printed" role="tabpanel" aria-labelledby="nav-printed-tab">
                                <h3>ID Printed list</h3>
                                <table class="table table-striped">
                                <tr>
                                    <th>Transation #</th>
                                    <th>Name</th>
                                    <th>OR #</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Alfreds Futterkiste</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Centro comercial Moctezuma</td>
                                    <td>1</td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
