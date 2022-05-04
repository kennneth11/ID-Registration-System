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
                                    <th>ID #</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($transactions as $transaction)
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
                                @endforeach
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
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-section modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-3 modal-left">
                        <div class="container">
                            <div class="id-pic-container d-flex justify-content-center">
                                <div id="id-pic">

                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-primary btn-modal-left" id="btn-create" type="button"></i>Edit Profile Picture</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div id="signature">

                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-primary btn-modal-left" id="btn-create" type="button"></i>Edit Signature</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-9">
                        <div class="modal-outer d-flex justify-content-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                        </div>
                        
                        <div class="container">
                            <h6 class="modal-title">A. Student Information</h6>
                            <div class="modal-info container">
                                <div class="row">
                                    <div class="col">
                                        <h6>Name: <p id="Name"></p></h6>
                                    </div>
                                    <div class="col">
                                        <h6>Name: <p id="Name"></p></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h6>Birthday: <p id="birthDate"></p></h6>
                                    </div>
                                    <div class="col">
                                        <h6>Blood Type: <p id="bloodType"></p></h6>
                                    </div>
                                    <div class="col">
                                        <h6>Gender: <p id="Name"></p></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Personal Mobile Number: <p id="Name"></p></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Permanent Address: <p id="permanentAddress"></p></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Present Address: <p id="presentAddress"></p></h6>
                                    </div>
                                </div>
                            </div>

                            <h6 class="modal-title" style="margin-top: 35px;">B. Education Level</h6>

                            <div class="modal-info container">
                                <h6>Program Name: <p id="">awgsefwaeawdawd  awdawd faw</p></h6>
                                <h6>College/Grade Name: <p id="college"></p></h6><br>
                                <h6>Course/Strand Name: <p id="course"></p></h6>
                                <h6 style="margin-left:10px">Section Name: <p id="Name"></p></h6>
                            </div>

                            <h6 class="modal-title" style="margin-top: 35px;">C. Contact Person Details</h6>
                            <div class="modal-info container">
                                <h6>Contact Person Name: <p id="contactPersonName">  </p></h6>
                                <h6 style="margin-left:10px">Contact Person Number: <p id="contactPersonNumber"></p></h6><br>
                                <h6>Contact Person Address: <p id=""></p></h6>
                            </div>
                        </div>

                        
                        <h6 class="qwer" id="id"></h6>
                        <h6 class="qwer"  id="orNumber"></h6>
                        <h6 class="qwer"  id="idNumber"></h6>
                        <h6 class="qwer"  id="status"></h6>
                        <h6 class="qwer"  id="active"></h6>
                        
                        <div class="modal-outer btn-modal d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

       </div>
    </div>
</div>
@endsection
