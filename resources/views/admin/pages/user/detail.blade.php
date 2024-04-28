@extends('admin.layouts.master')

@section('extra-head-scripts')
<style>
    
    .btn-nah{
        width: 200px;
        color: white;
        font-weight: 600;
        font-size: 120%;
        border-radius: 25px;
        background: #b02451;
    }
    .btn-nah:hover {
        background: #872b62
    }
    .form-switch {
        padding-left: 0px !important;
    }
    .form-check-input {
        float: right !important;
        width: 4rem !important;
        height: 2rem !important;
    }

    .group3 {
        background: #f7f7f7;
        margin-top: 8px;
        margin-bottom: 8px;
        padding-top: 8px;
        padding-bottom: 8px;
        border-radius: 10px;
    }
    .yes_no {
        font-size: 18px;
        margin-left: 30px;
        font-weight: bold;
    }
    .green {
        color: green;
    }
    .red {
        color: red;
    }
    label {
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4 mt-4">

                <h4 class="pb-2">Detail of: <b>{{ $dev_user->email }}</b></h4>
    
                <form>

                    @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session('message'))  
                    <div class="alert alert-{{session('classs')}} alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{ session('message') }}</li></ul>
                    </div>
                    @endif

                    <input type="hidden" value="{{csrf_token()}}" name="_token" />

                    <div class="mt-3 mt-lg-3">
                        <!-- <h3 class="heading-three">Part 1:</h3> -->
                        <div class="row mt-2 mt-lg-4 box-div">

                            <div class="col-md-6">
                                <div class="mb-3 mt-1">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" name="full_name" class="form-control" placeholder="Enter your name" value="{{ $dev_user->full_name }}" required readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 mt-1">
                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                    <input type="text" name="mobile_number" class="form-control" placeholder="01xxxxxxxxx" value="{{ $dev_user->mobile_number }}" minlength="11" maxlength="11" required readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 mt-1">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="info@xyz.com" value="{{ $dev_user->email }}" required readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 mt-1">
                                    <label for="home_address" class="form-label">Home Address</label>
                                    <input type="text" name="home_address" class="form-control" placeholder="Manirampur Jessore" value="{{ $dev_user->home_address }}" required readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 mt-1">
                                    <label for="current_address" class="form-label">Current Address</label>
                                    <input type="text" name="current_address" class="form-control" placeholder="House 8, Road 11, Banani Dhaka" value="{{ $dev_user->current_address }}" required readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 mt-1">
                                    <label for="division" class="form-label">Division</label>
                                    <input type="text" name="division" class="form-control" placeholder="Your division" value="{{ $dev_user->division }}" required readonly>
                                </div>
                                
                            </div>

                            <div class="mb-3 mt-1">
                                <label for="educational_background" class="form-label">Educational Background</label>
                                <textarea class="form-control" id="editor2" name="educational_background"
                                placeholder="Bachelors in CS laid the foundation, while bootcamps provided practical skills. Projects offered hands-on experience, with a commitment to continuous learning ensuring mastery of HTML ..." required readonly>{{ $dev_user->educational_background }}</textarea>
                            </div>

                            <div class="mb-3 mt-1">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="has_pc">Do you have your personal Laptop/Desktop PC: <span class="yes_no @if($dev_user->has_pc == 'yes') green @else  red @endif">{{ $dev_user->has_pc }}</span></label>
                                </div>
                            </div>

                            <div class="mb-3 mt-1">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="has_wifi">Do you have wifi/ broadband internet connection: <span class="yes_no @if($dev_user->has_wifi == 'yes') green @else  red @endif">{{ $dev_user->has_wifi }}</span></label>
                                </div>
                            </div>

                            <!-- programming experience: -->
                            <div class="group3">
                                <div class="mb-3 mt-1">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="has_programming_experience">Do you have programming experience: <span class="yes_no @if($dev_user->has_programming_experience == 'yes') green @else  red @endif">{{ $dev_user->has_programming_experience }}</span></label>
                                        
                                    </div>
                                </div>

                                <div class="mb-3 mt-1 programming_experience_fld">
                                    <label for="programming_experience" class="form-label">
                                    Describe your programming experience
                                    </label>
                                    <textarea class="form-control" id="editor3" id="programming_experience" name="programming_experience"
                                    placeholder="Your programming experience ..." required readonly>{{  $dev_user->programming_experience }}</textarea>
                                </div>

                                <div class="mb-3 mt-1 programming_experience_fld">
                                    <label for="programming_experience_rate" class="form-label">Rate your programming experience:  <span class="yes_no">{{ $dev_user->programming_experience_rate }}</span></label>
                                </div>
                            </div>


                            <!-- android app development experience: -->
                            <div class="group3">
                                <div class="mb-3 mt-1">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="has_android_experience">Do you have android app development experience: <span class="yes_no @if($dev_user->has_android_experience == 'yes') green @else  red @endif">{{ $dev_user->has_android_experience }}</span></label>
                                       
                                    </div>
                                </div>

                                <div class="mb-3 mt-1 android_experience_fld">
                                    <label for="android_experience" class="form-label">
                                    Describe your android app development
                                    </label>
                                    <textarea class="form-control" id="editor1" id="android_experience" name="android_experience"
                                    placeholder="Your programming experience ..." required readonly>{{ $dev_user->android_experience }}</textarea>
                                </div>

                                <div class="mb-3 mt-1 android_experience_fld">
                                    <label for="android_experience_rate" class="form-label">Rate your android app development experience: <span class="yes_no">{{ $dev_user->android_experience_rate }}</span></label>
                                </div>
                            </div>

                            
                            <div class="mb-3 mt-1">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="allocate_time">Do you agree to allocate 6 hours per week for 3 months to complete the training program: <span class="yes_no @if($dev_user->allocate_time == 'yes') green @else  red @endif">{{ $dev_user->allocate_time }}</span></label>
                                </div>
                            </div>

                            <div class="mb-3 mt-1">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="bear_cost">Do you agree to bear any cost necessary to host your developed application developed during the program: <span class="yes_no @if($dev_user->bear_cost == 'yes') green @else  red @endif">{{ $dev_user->bear_cost }}</span></label>
                                </div>
                            </div>

                        </div>

                    </div>

                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('extra-foot-scripts')
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        // height: 260,
        // width: 700,
        removeButtons: 'PasteFromWord'
    });
    CKEDITOR.replace('editor2', {
        // height: 260,
        // width: 700,
        removeButtons: 'PasteFromWord'
    });
    CKEDITOR.replace('editor3', {
        // height: 260,
        // width: 700,
        removeButtons: 'PasteFromWord'
    });
</script>
@endsection