@extends('layouts.final-layout')

@section('content')

    <div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
            <h1 class="app-page-title">Dashboard</h1>

            <div class="row g-4 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat green-border h-100">
                        <div class="app-card-body p-5 p-lg-5">
                            <h4 class="stats-type mb-1">Total ID's Printed</h4>
                            <div class="stats-figure">12,628</div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat green-border h-100">
                        <div class="app-card-body p-5 p-lg-5">
                            <h4 class="stats-type mb-1">PRINTED ID'S - MAY</h4>
                            <div class="stats-figure">250</div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-6">
                    <div class="app-card app-card-stat green-border h-100">
                        <div class="app-card-body p-5 p-lg-5">
                            <h4 class="stats-type mb-1">PENDING TRANSACTIONS</h4>
                            <div class="stats-figure">{{$active}}</div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
            </div><!--//row-->

            <!-- <div class="row">
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
                                    <th></th>
                                    <th>OR #</th>
                                    <th>ID #</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($transactions as $transaction)
                                <tr> 
                                    <td style="width:100px; overflow: hidden; display: white-space: nowrap;">
                                        <img id="{{$transaction->or_number}}table_pic" class="img-fluid" src="{{ asset($transaction->file_path_picture) }}">
                                        <img style="display:none;" id="{{$transaction->or_number}}table_sign" class="img-fluid" src="{{ asset($transaction->file_path_singature) }}">
                                    </td>
                                    <td>{{$transaction->or_number}}</td>
                                    <td>{{$transaction->id_number}}</td>
                                    <td>{{$transaction->first_name . " " . $transaction->miidle_name . " " . $transaction->last_name}}</td>
                                    <td>
                                        <button onclick="OpenModalTran('{{$transaction->or_number}}', '{{$transaction->id_number}}', '{{$transaction->first_name}}', '{{$transaction->miidle_name}}', '{{$transaction->last_name}}', '{{$transaction->blood_type}}', '{{$transaction->gender}}', '{{$transaction->date_of_birth}}', '{{$transaction->mobile_Number}}', '{{$transaction->address}}', '{{$transaction->course}}', '{{$transaction->college}}', '{{$transaction->emergency_contact}}', '{{$transaction->emergency_mobileNo}}', '{{$transaction->emergency_address}}', '{{$transaction->file_path_picture}}', '{{$transaction->file_path_singature}}' )" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
            </div> -->

       
            
            <!-- <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0"></h1>
                </div>
                <div class="col-auto">
                        <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-yellow">Search</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            
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
                                            <th class="cell">OR No.</th>
                                            <th class="cell">ID No.</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transactions as $transaction)
                                        <tr> 
                                            
                                                <img style="display:none;" id="{{$transaction->or_number}}table_pic" class="img-fluid" src="{{ asset($transaction->file_path_picture) }}">
                                                <img style="display:none;" id="{{$transaction->or_number}}table_sign" class="img-fluid" src="{{ asset($transaction->file_path_singature) }}">
                                            
                                            <td>{{$transaction->or_number}}</td>
                                            <td>{{$transaction->id_number}}</td>
                                            <td>{{$transaction->first_name . " " . $transaction->miidle_name . " " . $transaction->last_name}}</td>
                                            <td>
                                                <button onclick="OpenModalTran('{{$transaction->or_number}}', '{{$transaction->id_number}}', '{{$transaction->first_name}}', '{{$transaction->miidle_name}}', '{{$transaction->last_name}}', '{{$transaction->blood_type}}', '{{$transaction->gender}}', '{{$transaction->date_of_birth}}', '{{$transaction->mobile_Number}}', '{{$transaction->address}}', '{{$transaction->course}}', '{{$transaction->college}}', '{{$transaction->emergency_contact}}', '{{$transaction->emergency_mobileNo}}', '{{$transaction->emergency_address}}', '{{$transaction->file_path_picture}}', '{{$transaction->file_path_singature}}' )" type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    View
                                                </button>
                                                <a class="btn btn-outline-warning" href="{{ route('Transaction.print',$transaction->or_number) }}">Print</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

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
                                            <th class="cell">OR No.</th>
                                            <th class="cell">ID No.</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cell">#15346</td>
                                            <td class="cell">#232521</td>
                                            <td class="cell">John Sanders</td>
                                            <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View Details</a>&nbsp<a class="btn-sm app-btn-secondary" href="#">View ID</a></td>
                                        </tr>
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
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-section modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 modal-left">
                        <div>
                            <div class="id-pic-container d-flex justify-content-center">
                                <img id="picture_content" class="img-id img-fluid">
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-primary btn-modal-left" id="btn-create" type="button"></i>Edit Profile Picture</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <img id="signature_content" class="img-id img-fluid" src="">
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-primary btn-modal-left" id="btn-create" type="button"></i>Edit Signature</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="modal-outer d-flex justify-content-end">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                        </div>
                        
                        <div class="container">
                            <h6 class="modal-title">A. Student Information</h6>
                            <div class="modal-info container">
                                <div class="row">
                                    <div class="col">
                                        <h6>First Name: <p id="first_name_modal"></p></h6>
                                    </div>
                                    <div class="col">
                                        <h6>Middle Name: <p id="miidle_name_modal"></p></h6>
                                    </div>
                                    <div class="col">
                                        <h6>Last Name: <p id="last_name_modal"></p></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <h6>Birthday: <p id="birthDate_modal"></p></h6>
                                    </div>
                                    <div class="col">
                                        <h6>Blood Type: <p id="bloodType_modal"></p></h6>
                                    </div>
                                    <div class="col">
                                        <h6>Gender: <p id="gender_modal"></p></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>Personal Mobile Number: <p id="mobileNum_modal"></p></h6>
                                    </div>
                                </div>
                                <div >
                                    <div >
                                        <h6>Permanent Address: <p id="permanentAddress_modal"></p></h6>
                                    </div>
                                </div>
                            </div>

                            <h6 class="modal-title" style="margin-top: 35px;">B. Education Level</h6>

                            <div class="modal-info container">
                                <div>
                                    <h6>College Name: <p id="college_modal">awgsefwaeawdawd  awdawd faw</p></h6>
                                </div>
                                <div>
                                    <h6>Course Name: <p id="course_modal"></p></h6><br>
                                </div>
                            </div>

                            <h6 class="modal-title" style="margin-top: 35px;">C. Contact Person Details</h6>
                            <div class="modal-info container">
                                <div>
                                    <h6>Contact Person Name: <p id="contactPersonName_modal">  </p></h6>
                                </div>
                                <div>
                                    <h6>Contact Person Number: <p id="contactPersonNumber_modal"></p></h6><br>
                                </div>
                                <div>
                                    <h6>Contact Person Address: <p id="contactPersonAddress_modal"></p></h6>
                                </div>
                                
                            </div>
                        </div>

                        
                        
                        

                        <div class="modal-outer btn-modal d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" onclick="closeThisModal('#exampleModal')" data-bs-toggle="modal" data-bs-target="#dateReleased">Change Image</button> &nbsp
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

       </div>
    </div>
</div>


<div class="modal fade" id="dateReleased" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content yellow-border">
            <div class="modal-header modal-border">
                <h5 style="color:black;font-weight: 400;" id="exampleModalLabel">What Image</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    ID picture
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Signature
                </label>
                </div>
            </div>

            <div class="modal-footer modal-border ">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="modal_idSet" type="button" class="btn btn-primary" data-bs-dismiss="modal">Proceed</button>
            </div>
            
        </div>
    </div>
</div>

@endsection
