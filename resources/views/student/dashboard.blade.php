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
            <h2>Student Dashboard</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="tbl-container green-border">
                        <div class="tab-content" style="width: 100%;">
                            <div class="position-relative m-4">
                                <div class="progress" style="height: 1px;">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                            </div>
                            

                            <div class="tab-pane fade show active" id="nav-requested" role="tabpanel" aria-labelledby="nav-requested-tab">
                                <h3>My Transation</h3>
                                <table class="table table-striped">
                                <tr>
                                    <th>Transation #</th>
                                    <th>ID #</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($transactions as $transaction)
                                    @if($transaction->id_number == Auth::user()->id)
                                    <tr>    
                                        <td>{{$transaction->id}}</td>
                                        <td>{{$transaction->id_number}}</td>
                                        <td>{{$transaction->name}}</td>
                                        <td>
                                            <button onclick="sendTransationID({{$transaction->id}}, '{{$transaction->or_number}}', '{{$transaction->id_number}}', '{{$transaction->name}}', '{{$transaction->course}}', '{{$transaction->college}}', '{{$transaction->blood_type}}', '{{$transaction->date_of_birth}}', '{{$transaction->present_address}}', '{{$transaction->permanent_address}}', '{{$transaction->contact_person_name}}', '{{$transaction->contact_person_number}}', '{{$transaction->status}}', '{{$transaction->active}}',)" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                View
                                            </button>
                                        </td>
                                    </tr>
                                    @endif
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
                <h6 id="id"></h6>
                <h6 id="orNumber"></h6>
                <h6 id="idNumber"></h6>
                <h6 id="Name"></h6>
                <h6 id="course"></h6>
                <h6 id="college"></h6>
                <h6 id="bloodType"></h6>
                <h6 id="birthDate"></h6>
                <h6 id="presentAddress"></h6>
                <h6 id="permanentAddress"></h6>
                <h6 id="contactPersonName"></h6>
                <h6 id="contactPersonNumber"></h6>
                <h6 id="status"></h6>
                <h6 id="active"></h6>
                <h6></h6>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>

@endsection
