@extends('layouts.final-layout')

@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<h1 class="app-page-title">My Transactions</h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tbl-container green-border">
                            <div class="tab-content" style="width: 100%;">
                                
                                <div class="tab-pane fade show active" id="nav-requested" role="tabpanel" aria-labelledby="nav-requested-tab">
                                    <div class="table-responsive">
                                        <table class="table app-table-hover mb-0 text-left">
                                        <tr>
                                            <th class="cell">Transation #</th>
                                            <th class="cell">ID #</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Status</th>
                                            <th class="cell">Date</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                        @foreach($transactions as $transaction)
                                            <tr>    
                                                <td class="cell">{{$transaction->or_number}}</td>
                                                <td class="cell">{{$transaction->id_number}}</td>
                                                <td class="cell">{{$transaction->first_name . " "  . $transaction->miidle_name . " "  .  $transaction->last_name}}</td>
                                                <td class="cell">{{$transaction->status}}</td>
                                                <td class="cell">{{date('d-m-Y', strtotime($transaction->created_at))}}</td>
                                                <td class="cell">
                                                <button onclick="OpenModalTran('{{$transaction->or_number}}', '{{$transaction->id_number}}', '{{$transaction->first_name}}', '{{$transaction->miidle_name}}', '{{$transaction->last_name}}', '{{$transaction->blood_type}}', '{{$transaction->gender}}', '{{$transaction->date_of_birth}}', '{{$transaction->mobile_Number}}', '{{$transaction->address}}', '{{$transaction->course}}', '{{$transaction->college}}', '{{$transaction->emergency_contact}}', '{{$transaction->emergency_mobileNo}}', '{{$transaction->emergency_address}}', '{{$transaction->file_path_picture}}', '{{$transaction->file_path_singature}}' )" type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#viewActive">
                                                    View
                                                </button>
                                                </td>
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

        <div class="modal fade" id="viewActive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-section modal-content">
                    <div class="container">

                            <div class="col">
                                <div class="modal-outer d-flex justify-content-end">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>
                                
                                <div class="container">
                                    <h6 class="modal-title">A. Student Information</h6>
                                    <div class="modal-info container">
                                        <div class="row">
                                            <div class="col-md">
                                                <h6>First Name: <p id="first_name_modal"></p></h6>
                                            </div>
                                            <div class="col-md">
                                                <h6>Middle Name: <p id="miidle_name_modal"></p></h6>
                                            </div>
                                            <div class="col-md">
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
