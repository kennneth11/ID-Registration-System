@extends('layouts.final-layout')

@section('content')


    <div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
            <h1  class="app-page-title">User Management</h1>
            <!-- <div class="row">
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
                                {{ $administrators->links() }}
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
                                {{ $students->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

         

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0"></h1>
                </div>
                <div class="col-auto">
                    <a href="{{ route('dashboard.user-management.create') }}" class="btn btn-primary " id="btn-create" type="button"></i>Create</a>
                </div>
            </div>

            <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-1">
                <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Requested</a>
                <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Printed</a>
            </nav>
            
            
            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">ID #</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Email Address</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($administrators as $user)
                                        <tr>
                                            <td class="cell">{{$user['id']}}</td>
                                            <td class="cell">{{$user['name']}}</td>
                                            <td class="cell">{{$user['email']}}</td>
                                            <td class="cell">
                                                <button onclick="sendid({{$user['id']}}, '{{$user['name']}}', '{{$user['email']}}')" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $administrators->links() }}

                            </div><!--//table-responsive-->
                            
                        </div><!--//app-card-body-->		
                    </div><!--//app-card-->
                    
                </div><!--//tab-pane-->
                
                <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                    <div class="app-card app-card-orders-table mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                
                                <table class="table mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">ID #</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Email Address</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $user)
                                        <tr>
                                            <td class="cell">{{$user['id']}}</td>
                                            <td class="cell">{{$user['name']}}</td>
                                            <td class="cell">{{$user['email']}}</td>
                                            <td class="cell">
                                                <button onclick="sendid({{$user['id']}}, '{{$user['name']}}', '{{$user['email']}}')" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    View
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->
                        </div><!--//app-card-body-->		
                    </div><!--//app-card-->
                </div><!--//tab-pane-->
            </div><!--//tab-content-->


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
