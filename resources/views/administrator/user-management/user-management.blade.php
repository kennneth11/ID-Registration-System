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
            <h2>User Management</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="tbl-container">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-requested-tab" data-bs-toggle="tab" data-bs-target="#nav-requested" type="button" role="tab" aria-controls="nav-requested" aria-selected="true">Administrators</button>
                                <button class="nav-link" id="nav-printed-tab" data-bs-toggle="tab" data-bs-target="#nav-printed" type="button" role="tab" aria-controls="nav-printed" aria-selected="false">Student</button>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('dashboard.user-management.create') }}" class="btn btn-primary " id="btn-create" type="button"></i>Create</a>
                            </div>
                            <div class="tab-pane fade show active" id="nav-requested" role="tabpanel" aria-labelledby="nav-requested-tab">
                                <table class="table table-striped">
                                <tr>
                                    <th>ID #</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($administrators as $user)
                                <tr>
                                    <td>{{$user['id']}}</td>
                                    <td>{{$user['name']}}</td>
                                    <td>{{$user['email']}}</td>
                                    <td>
                                        <button onclick="sendid({{$user['id']}}, '{{$user['name']}}', '{{$user['email']}}')" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            View
                                        </button>
                                    </td>
                                </tr>

                                @endforeach
                                
                                </table>
                            </div>

                            <div class="tab-pane fade" id="nav-printed" role="tabpanel" aria-labelledby="nav-printed-tab">
                                <table class="table table-striped">
                                <tr>
                                    <th>ID #</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                </tr>
                                @foreach($students as $user)
                                <tr>
                                    <td>{{$user['id']}}</td>
                                    <td>{{$user['name']}}</td>
                                    <td>{{$user['email']}}</td>
                                </tr>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-section modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
                <h6 id="id">awdawdawdawdawd</h6>
                <h6 id="name"></h6>
                <h6 id="email"></h6>
                <h6>awdawdawdawdawd</h6>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
@endsection
