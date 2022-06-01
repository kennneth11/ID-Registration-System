@extends('layouts.final-layout')

@section('content')


    <div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<h1 class="app-page-title">Welcome, {{ Auth::user()->name }}</h1>

            <div class="row">
                @if($active)
                <div class="col-md-6">
                    <div class="personal-info green-border">
                        <h3>Active Transaction</h3>
                        <div class="position-relative m-4">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width:@if($active->status == 'pending'){ 0%} @elseif($active->status == 'processing'){50%} @elseif($active->status == 'completed'){100%} @endif;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div style="display:none;">
                                <img id="{{$active->or_number}}table_pic" class="img-fluid" src="{{ asset($active->file_path_picture) }}">
                                <img id="{{$active->or_number}}table_sign" class="img-fluid" src="{{ asset($active->file_path_singature) }}">

                            </div>

                            @if($active->status == 'pending')
                                <div>
                                    <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                                    <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                    <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                                </div><br><br>
                                <div class=" text-center">
                                    <h2 class="text-uppercase" >Transaction {{$active->status}}</h2> 
                                </div><br>
                                <div class="btn-active">
                                    <div>
                                        <button onclick="OpenModalTranActive('{{$active->or_number}}', '{{$active->id_number}}', '{{$active->first_name}}', '{{$active->miidle_name}}', '{{$active->last_name}}', '{{$active->blood_type}}', '{{$active->gender}}', '{{$active->date_of_birth}}', '{{$active->mobile_Number}}', '{{$active->address}}', '{{$active->course}}', '{{$active->college}}', '{{$active->emergency_contact}}', '{{$active->emergency_mobileNo}}', '{{$active->emergency_address}}', '{{$active->file_path_picture}}', '{{$active->file_path_singature}}' )" type="button" class="btn btn-yellow" data-bs-toggle="modal" data-bs-target="#viewActive">
                                            View Details
                                        </button>
                                    </div>
                                    <div>
                                        <button onclick="EditActive('{{$active->or_number}}', '{{$active->id_number}}', '{{$active->first_name}}', '{{$active->miidle_name}}', '{{$active->last_name}}', '{{$active->blood_type}}', '{{$active->gender}}', '{{$active->date_of_birth}}', '{{$active->mobile_Number}}', '{{$active->address}}', '{{$active->course}}', '{{$active->college}}', '{{$active->emergency_contact}}', '{{$active->emergency_mobileNo}}', '{{$active->emergency_address}}', '{{$active->file_path_picture}}', '{{$active->file_path_singature}}' )" type="button" class="btn btn-yellow" data-bs-toggle="modal" data-bs-target="#editActive">
                                            Edit
                                        </button>
                                    </div>
                                    <div>
                                        <form id="transaction-delete"method="POST" action="{{ route('Transaction.delete') }}" enctype="multipart/form-data">
                                        @csrf
                                            <button name="transaction-delete"  for="transaction-delete" class="btn btn-yellow"  type="submit" value="{{$active->or_number}}">Cancel</button>
                                        </form>
                                    </div>                       
                                </div>
                            @elseif($active->status == 'processing')
                                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                            @elseif($active->status == 'completed')
                                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                            @endif

                        </div>
                        
                    </div>
                </div>
                @endif
                <div class="col-md-6">
                    <div class="personal-info green-border">
                        <h3>Personal Information</h3>
                            <div class="container">
                                <form id="transaction-store" method="POST" action="{{ route('Transaction.store') }}" enctype="multipart/form-data">
                                @csrf
                                    <input id="studentnumber" name="studentnumber" type="hidden" class="form-control" value="{{(int)$student->StudentNo}}" readonly>
                                    <div class="row item border-bottom py-3">
                                        <div class="col-md-4 item"align-middle>
                                            <label class="part input-group-text align-middle" id="inputGroup-sizing-default">First Name</label>
                                        </div>
                                        <div class="col">
                                            <input  id="firstname" name="firstname" type="text" class="" value="{{$student->Firstname}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4 ">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Middle Name</label>
                                        </div>
                                        <div class="col">
                                            <input id="middlename" name="middlename" type="text" class="" value="{{$student->MiddleName}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Last Name</label>
                                        </div>
                                        <div class="col">
                                            <input id="lastname" name="lastname" type="text"  value="{{$student->Lastname}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Blood Type</label>
                                        </div>
                                        <div class="col">
                                            <input id="bloodtype" name="bloodtype" type="text"  value="{{$student->BloodType}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Gender</label>
                                        </div>
                                        <div class="col">
                                            <input id="gender" name="gender" type="text" value="{{$student->Gender}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Date of Birth</label>
                                        </div>
                                        <div class="col">
                                            <input id="date_birth" name="date_birth" type="text"  value="{{date('Y-m-m', strtotime($student->DateOfBirth))}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Personal Mobile #</label>
                                        </div>
                                        <div class="col">
                                            <input id="mobileNumber" name="mobileNumber" type="text"  value="{{$student->BloodType}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Address</label>
                                        </div>
                                        <div class="col">
                                            <input id="perm_address" name="perm_address" type="text" value="{{$student->Perm_Address}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Program Name</label>
                                        </div>
                                        <div class="col">
                                            <input id="prog_name" name="prog_name" type="text"  value="{{$student->ProgName}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >College/Grade</label>
                                        </div>
                                        <div class="col">
                                            <input id="collegeName" name="collegeName" type="text"  value="{{$student->CollegeName}}"readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Emergency Contact</label>
                                        </div>
                                        <div class="col">
                                            <input id="emergency_contact" name="emergency_contact" type="text" value="{{$student->Emergency_Contact}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Emergency Mobile</label>
                                        </div>
                                        <div class="col">
                                            <input id="emergency_mobileNo" name="emergency_mobileNo" type="text"  value="{{$student->Emergency_MobileNo}}" readonly>
                                        </div>
                                    </div>
                                    <div class="row border-bottom py-3">
                                        <div class="col-md-4">
                                            <label class="part input-group-text" id="inputGroup-sizing-default" >Emergency Address</label>
                                        </div>
                                        <div class="col">
                                            <input id="emergency_address" name="emergency_address" type="text"  value="{{$student->Emergency_Address}}" readonly>
                                        </div>
                                    </div>
                                    <br>



                                    <div class="mb-3 file-upload">
                                        <label for="id-picture" class="title" >ID Picture:</label>
                                        <div>
                                            <button  type="button" id="btn-picture" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-idpicture1">Choose File</button>
                                        </div>
                                        <input style="display:none;" accept=".jpg"  class="form-control" type="file" name="picture" id="id-picture" >
                                    </div>

                                    

                                    <div class="mb-3 file-upload">
                                        <label for="id-signature" class="title" >Signature:</label>
                                        <div>
                                            <button  type="button" id="btn-signature" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-signature1">Choose File</button>
                                        </div>
                                        <input style="display:none;" accept=".jpg"  class="form-control" type="file" name="signature" id="id-signature" >
                                    </div>
                                    
                                   

                                    <div class="modal fade " id="modal-or" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content yellow-border edit-modal">
                                                <div class="modal-body">
                                                    <div class="mb-3">           
                                                        <label for="or-number" class="title">OR No.</label>
                                                        <input id="or-number" type="number" class="form-control input-data " name="or_number" required autocomplete="or-number">
                                                    </div>
                                                </div>
                                                <div class="modal-footer modal-border ">
                                                    <button type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                                                    <button href="" class="btn btn-primary" id="btn-create" form="transaction-store" name="transaction-store" type="submit">Prooceed</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button href="" class="btn btn-yellow" data-bs-toggle="modal" data-bs-target="#modal-or">REQUEST ID</button>
                                    <button onclick="EditData()" type="button"  class="btn btn-yellow" data-bs-toggle="modal" data-bs-target="#editData">EDIT</button>

                                </form>
                            </div>

                    </div>
                </div>


            </div>

        </div>
    </div>




        <div>
            @if ($message = Session::get('failed'))
            <div class="modal fade " id="Alert-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-header modal-border">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>{{ $message }}</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endif

            @error('or_number')
            <div class="modal fade " id="Alert-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-header modal-border">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>{{ $message }}</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
            @enderror
            @error('id_picture')
            <div class="modal fade " id="Alert-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-header modal-border">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>{{ $message }}</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
            @enderror
            @error('id_singature')
            <div class="modal fade " id="Alert-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-header modal-border">
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>{{ $message }}</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
            @enderror
        </div>

        <! -- edit information to transaction modal-->
        <div class="modal fade " id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content yellow-border edit-modal">
                    <form>
                        <div class="modal-header modal-border">
                            <h5 class="" id="exampleModalLabel">A .Student Information</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                        <div class="modal-body">
                            
                                <div class="mb-3">           
                                    <label for="first_name" class="title">{{ __('First Name:') }}</label>
                                    <input id="first_name" type="text" class="form-control input-data " name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="middle_name" class="title">{{ __('Middle Name:') }}</label>
                                    <input id="middle_name" type="text" class="form-control input-data" name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="last_name" class="title">{{ __('Last Name:') }}</label>
                                    <input id="last_name" type="text" class="form-control input-data " name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>
                                
                                <div class="mb-3">       
                                    <label for="blood_type" class="title">{{ __('Blood Type:') }}</label>
                                    <select id="blood_type" name="blood_type"class="form-select" aria-label="Default select example">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>

                                <div class="mb-3">       
                                    <label for="gender" class="title">{{ __('Gender:') }}</label>
                                    <select id="gender_modal" name="gender_modal"class="form-select" aria-label="Default select example" disabled>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>

                                <div class="mb-3">           
                                    <label for="modal_datebirth" class="title">{{ __('Date of Birth') }}</label>
                                    <input id="modal_datebirth" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="modal-datebirth" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="mobile_number" class="title">{{ __('Personal Mobile Number') }}</label>
                                    <input id="mobile_number" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div class="mb-3">           
                                    <label for="address" class="title">{{ __('Address') }}</label>
                                    <input id="address" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div  class="mb-3">  
                                    <h5 class="title-form" id="exampleModalLabel">B. Education Level</h6>
                                </div>

                                <div class="mb-3">           
                                    <label for="program" class="title">{{ __('Program') }}</label>
                                    <input id="program" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="college" class="title">{{ __('College') }}</label>
                                    <input id="college" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div  class="mb-3">  
                                    <h5 class="title-form" id="exampleModalLabel">C. Contact Person Details</h6>
                                </div>

                                <div class="mb-3">           
                                    <label for="contact_person_name" class="title">{{ __('Contact Person Name') }}</label>
                                    <input id="contact_person_name" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div class="mb-3">           
                                    <label for="contact_person_number" class="title">{{ __('Contact Person Number') }}</label>
                                    <input id="contact_person_number" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div class="mb-3">           
                                    <label for="contact_person_address" class="title">{{ __('Contact Person Address') }}</label>
                                    <input id="contact_person_address" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                            
                        </div>
                        <div class="modal-footer modal-border ">
                            <button type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="btn-create" class="btn btn-primary" data-bs-dismiss="modal" onclick="passData()">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <! -- edit active transaction modal-->
        <div class="modal fade " id="editActive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content yellow-border edit-modal">
                    <form id="transaction-update" method="POST" action="{{ route('Transaction.update') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="modal-header modal-border">
                            <h5 class="" id="exampleModalLabel">A .Student Information</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input id="studentnumber_editModal" name="studentnumber_" type="hidden" class="form-control" value="" readonly>
                            <input id="or_number_editModal" name="or_number" type="hidden" class="form-control" value="" readonly>
                                <div class="mb-3">           
                                    <label for="first_name_editModal" class="title">{{ __('First Name:') }}</label>
                                    <input id="first_name_editModal" type="text" class="form-control input-data " name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="middle_name_editModal" class="title">{{ __('Middle Name:') }}</label>
                                    <input id="middle_name_editModal" type="text" class="form-control input-data" name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="last_name_editModal" class="title">{{ __('Last Name:') }}</label>
                                    <input id="last_name_editModal" type="text" class="form-control input-data " name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>
                                
                                <div class="mb-3">       
                                    <label for="blood_type_editModal" class="title">{{ __('Blood Type:') }}</label>
                                    <select id="blood_type_editModal" name="blood_type_edit"class="form-select" aria-label="Default select example">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>

                                <div class="mb-3">       
                                    <label for="gender_modal_editModal" class="title">{{ __('Gender:') }}</label>
                                    <select id="gender_modal_editModal" name="gender_modal"class="form-select" aria-label="Default select example" disabled>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>

                                <div class="mb-3">           
                                    <label for="modal_datebirth_editModal" class="title">{{ __('Date of Birth') }}</label>
                                    <input id="modal_datebirth_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="modal-datebirth" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="mobile_number_editModal" class="title">{{ __('Personal Mobile Number') }}</label>
                                    <input id="mobile_number_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="mobile_number_edit" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div class="mb-3">           
                                    <label for="address_editModal" class="title">{{ __('Address') }}</label>
                                    <input id="address_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="address_edit" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div  class="mb-3">  
                                    <h5 class="title-form" id="exampleModalLabel">B. Education Level</h6>
                                </div>

                                <div class="mb-3">           
                                    <label for="program_editModal" class="title">{{ __('Program') }}</label>
                                    <input id="program_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div class="mb-3">           
                                    <label for="college_editModal" class="title">{{ __('College') }}</label>
                                    <input id="college_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="first_name" required autocomplete="first_name" value="awd" disabled>
                                </div>

                                <div  class="mb-3">  
                                    <h5 class="title-form" id="exampleModalLabel">C. Contact Person Details</h6>
                                </div>

                                <div class="mb-3">           
                                    <label for="contact_person_name_editModal" class="title">{{ __('Contact Person Name') }}</label>
                                    <input id="contact_person_name_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="contact_person_name_edit" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div class="mb-3">           
                                    <label for="contact_person_number_editModal" class="title">{{ __('Contact Person Number') }}</label>
                                    <input id="contact_person_number_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="contact_person_number_edit" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div class="mb-3">           
                                    <label for="contact_person_address_editModal" class="title">{{ __('Contact Person Address') }}</label>
                                    <input id="contact_person_address_editModal" type="text" class="form-control input-data @error('car_maker_name') is-invalid @enderror" name="contact_person_address_edit" required autocomplete="first_name" value="awd" autofocus>
                                </div>

                                <div class="mb-3 file-upload">
                                    <label for="id-picture" class="title" >ID Picture:</label>
                                    <input accept=".jpg"  class="form-control" type="file" name="picture_edit" id="id-picture" >
                                </div>

                                <div class="mb-3 file-upload">
                                    <label for="id-signature" class="title" >Signature:</label>
                                    <input accept=".jpg"  class="form-control" type="file" name="signature_edit" id="id-signature" >
                                </div>

                            
                        </div>
                        <div class="modal-footer modal-border ">
                            <button type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button form="transaction-update" name="transaction-update" type="submit" id="btn-create" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <! -- view active transaction modal-->
        <div class="modal fade" id="viewActive" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-section modal-content">
                    <div class="container">
                        <div class="row">
                            <div class="modal-outer d-flex justify-content-end">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <h6 id="picture_content_active1">ID picture</h6>
                                    <img id="picture_content_active" class="img-fluid">
                                </div>
                                <br>
                                <div>
                                    <h6 id="signature_content_active1">ID Signature</h6>
                                    <img id="signature_content_active" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-9">
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
                                                <h6>Gender: <p id="gender_modal_dashboard_student"></p></h6>
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

        <! -- guideline id picture modal-->
        <div>
            <div class="modal" id="guideline-idpicture1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/id-picture/id guidelines 20216.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button  onclick="closeOpen('#guideline-idpicture2','#guideline-idpicture1')" type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-idpicture2">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal " id="guideline-idpicture2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/id-picture/id guidelines 20217.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-idpicture1','#guideline-idpicture2')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button onclick="closeOpen('#guideline-idpicture3','#guideline-idpicture2')" type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-idpicture3">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal " id="guideline-idpicture3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/id-picture/id guidelines 20218.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-idpicture2','#guideline-idpicture3')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button onclick="closeOpen('#guideline-idpicture4','#guideline-idpicture3')" type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-idpicture4">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal " id="guideline-idpicture4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/id-picture/id guidelines 202110.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-idpicture3','#guideline-idpicture4')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button onclick="closeOpen('#guideline-idpicture5','#guideline-idpicture4')" type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-idpicture5">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal " id="guideline-idpicture5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/id-picture/id guidelines 202111.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-idpicture4','#guideline-idpicture5')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button onclick="closeOpen('#guideline-idpicture6','#guideline-idpicture5')" type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-idpicture6">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal " id="guideline-idpicture6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/id-picture/id guidelines 20219.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-idpicture5','#guideline-idpicture6')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button  onclick="openUpload('#guideline-idpicture6', '#picture')" type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <! -- guideline id signature modal-->
        <div>
            <div class="modal " id="guideline-signature1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/signature/id guidelines 202111.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button  onclick="closeOpen('#guideline-signature2','#guideline-signature1')"type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-signature2">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal  " id="guideline-signature2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/signature/id guidelines 202114.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-signature1','#guideline-signature2')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button  onclick="closeOpen('#guideline-signature3','#guideline-signature2')" ype="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-signature3">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal  " id="guideline-signature3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/signature/id guidelines 202115.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-signature2','#guideline-signature3')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button  onclick="closeOpen('#guideline-signature4','#guideline-signature3')" ype="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal" data-bs-target="#guideline-signature4">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal  " id="guideline-signature4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content yellow-border edit-modal">
                        <div class="modal-body">
                        <img src="{{ asset('images/guidelines/signature/id guidelines 202113.jpg') }}" class="img-fluid" >
                        </div>
                        <div class="modal-footer modal-border ">
                            <button onclick="closeOpen('#guideline-signature3','#guideline-signature4')" type="button" id="btn-create" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                            <button  onclick="openUpload('#guideline-signature4','#signature')" type="button" id="btn-create" class="btn btn-secondary "  data-bs-toggle="modal">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>




@endsection
