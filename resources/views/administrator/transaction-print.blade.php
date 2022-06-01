@extends('layouts.final-layout')

@section('content')

    <div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
            <h1 class="app-page-title">Print</h1>
            <div class="row">

                <div class="col-5">
                    <div class="green-border app-card app-card-account  d-flex flex-column align-items-start">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                        <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                        <circle cx="3.5" cy="5.5" r=".5"/>
                                        <circle cx="3.5" cy="8" r=".5"/>
                                        <circle cx="3.5" cy="10.5" r=".5"/>
                                    </svg>
                                    </div><!--//icon-holder-->
                                    
                                </div><!--//col-->
                                <div class="col-auto">
                                    <h4 class="app-card-title">Informations</h4>
                                </div><!--//col-->
                            </div><!--//row-->
                        </div><!--//app-card-header-->
                        <div class="app-card-body px-4 w-100">


                            <div style="display:none;" class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>OR Number</strong></div>
                                        <div class="item-data" id="or_number">
                                            {{ $transactions->or_number}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            

                            <img style="display:none;" id="id_pic" class="img-fluid" src="{{ asset($transactions->file_path_picture) }}">
                            <img style="display:none;" id="id_sign" class="img-fluid" src="{{ asset($transactions->file_path_singature) }}">

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Student Number</strong></div>
                                        <div class="item-data" id="id_number">
                                            {{ $transactions->id_number}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Name</strong></div>
                                        <div class="item-data">
                                            {{ $transactions->first_name . " " . $transactions->miidle_name . " " .$transactions->last_name }}
                                        </div>
                                        <div style="display:none;" id="first_middle_name">
                                            {{ $transactions->first_name . " " . $transactions->miidle_name}}
                                        </div>
                                        <div style="display:none;" id="last_name">
                                            {{ $transactions->last_name}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Blood Type</strong></div>
                                        <div class="item-data" id="blood_type">
                                            {{ $transactions->blood_type}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Gender</strong></div>
                                        <div class="item-data" id="gender">
                                            @if($transactions->gender == "m")
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Date of Birth</strong></div>
                                        <div class="item-data" id="date_of_birth">
                                            {{ date( "d-M-Y", strtotime( $transactions->date_of_birth)) }}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Mobile Number</strong></div>
                                        <div class="item-data" id="mobile_Number">
                                            {{ $transactions->mobile_Number}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Address</strong></div>
                                        <div class="item-data" id="address">
                                            {{ $transactions->address}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Course</strong></div>
                                        <div class="item-data" id="course">
                                            {{ $transactions->course}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>College</strong></div>
                                        <div class="item-data" id="college">
                                            {{ $transactions->college}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Emergency Contact</strong></div>
                                        <div class="item-data" id="emergency_contact">
                                            {{ $transactions->emergency_contact}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Emergency MobileNo</strong></div>
                                        <div class="item-data" id="emergency_mobileNo">
                                            {{ $transactions->emergency_mobileNo}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Emergency Address</strong></div>
                                        <div class="item-data" id="emergency_address">
                                            {{ $transactions->emergency_address}}
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

 

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//col-->

                <div class="col-7">
                <div class="green-border app-card app-card-account  d-flex flex-column align-items-start">
                        <div class="item app-card-header p-3 border-bottom-0 w-100">

                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                    </svg>
                                    </div><!--//icon-holder-->
                                    
                                </div><!--//col-->
                                <div class="col-auto">
                                    <h4 class="app-card-title">ID Preview</h4>
                                </div><!--//col-->

                                <div class="col text-end">
                                    <button type="button" class="btn btn-outline-warning" id="setToID">
                                    Set to ID
                                    </button>
                                </div><!--//col-->

                            </div><!--//row-->

                        </div><!--//app-card-header-->
                        
                        <div class="app-card-body px-4 w-100">
                    

                            <div class="row item py-3">
                                <div class="col">
                                    <canvas class="canvas_div_pdf" id="canvas_front"  style="width:320px; background: url('{{asset('ID/college-id-front.jpg')}}');background-size: cover; ">
                                        Your browser does not support the HTML canvas tag.
                                    </canvas>
                                </div>

                                <div class="col">
                                    <canvas class="canvas_div_pdf" id="canvas_back"  style="width:320px; background: url('{{asset('ID/college-id-back.jpg')}}');background-size: cover; ">
                                        Your browser does not support the HTML canvas tag.
                                    </canvas>
                                </div>
                            </div>


                    
                            <div class="item border-bottom border-top py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label"><strong>Date Released</strong></div>
                                        <div class="item-data" id="getDate_Released">
                                            New York
                                        </div>
                                    </div><!--//col-->

                                    <div class="col text-end">
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#dateReleased">
                                        Edit
                                        </button>
                                    </div><!--//col-->

                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item  py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col text-center">
                                        <div id="pdf-btns">
                                            <button type="button" class="btn btn-primary" id="get-pdf" onclick="getPDF();">Save as PDF</button>
                                            <button type="button" class="btn btn-primary" id="get-pdf" onclick="samp();">try</button>
                                        </div>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//item-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                   
                </div><!--//col-->

            </div><!--//row-->
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="dateReleased" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content yellow-border">
            <div class="modal-header modal-border">
                <h5 style="color:black;font-weight: 400;" id="exampleModalLabel">Date to Release</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>
                    <input class="form-control input-data " type="date" id="date_released" name="date_released" >
                </form>
            </div>

            <div class="modal-footer modal-border ">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="modal_idSet" type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="updateDate()">Save changes</button>
            </div>
            
        </div>
    </div>
</div>


@endsection
