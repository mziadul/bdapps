@extends('user.layout.master')

@section('extra-head-script')
<style>
    .team-regis {
        margin-top: 155px;
    }
    .box-div {
        border: 3px solid #cb878729;
        background: #ffeaeb47;
        border-radius: 20px;
        padding: 15px;
    }
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
        background: #eef8ff;
        margin-top: 8px;
        margin-bottom: 8px;
        border-radius: 10px;
    }
    
</style>
@endsection

@section('content')

<div class="team-regis">
    <div class="container">

        <h1 class="heading-one pt-4 text-center">Registration Form</h1>

        <form method="post" action="{{route('user.registration.store')}}">

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
            
            <div class="mt-4 mt-lg-5">
                <!-- <h3 class="heading-three">Part 1:</h3> -->
                <div class="row mt-2 mt-lg-4 box-div">

                    <div class="col-md-6">
                        <div class="mb-3 mt-1">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter your name" value="{{old('full_name')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-1">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control" placeholder="01xxxxxxxxx" value="{{old('mobile_number')}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="info@xyz.com" value="{{old('email')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-1">
                            <label for="home_address" class="form-label">Home Address</label>
                            <input type="text" name="home_address" class="form-control" placeholder="Manirampur Jessore" value="{{old('home_address')}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-1">
                            <label for="current_address" class="form-label">Current Address</label>
                            <input type="text" name="current_address" class="form-control" placeholder="House 8, Road 11, Banani Dhaka" value="{{old('current_address')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-1">
                            <label for="division" class="form-label">Division</label>
                            <select id="division" name="division"  class="form-control"> 

                                <option value="Barishal" @if (old('division') == "Barishal") {{ 'selected' }} @endif>Barishal</option>

                                <option value="Chattogram" @if (old('division') == "Chattogram") {{ 'selected' }} @endif
                                >Chattogram</option>

                                <option value="Dhaka" @if (old('division') == "Dhaka") {{ 'selected' }} @endif>Dhaka</option>

                                <option value="Khulna" @if (old('division') == "Khulna") {{ 'selected' }} @endif>Khulna</option>

                                <option value="Mymensingh" @if (old('division') == "Mymensingh") {{ 'selected' }} @endif>Mymensingh</option>

                                <option value="Rajshahi" @if (old('division') == "Rajshahi") {{ 'selected' }} @endif>Rajshahi</option>

                                <option value="Rangpur" @if (old('division') == "Rangpur") {{ 'selected' }} @endif>Rangpur</option>

                                <option value="Sylhet" @if (old('division') == "Sylhet") {{ 'selected' }} @endif
                                    >Sylhet</option>

                            </select>
                        </div>
                        
                    </div>

                    <div class="mb-3 mt-1">
                        <label for="educational_background" class="form-label">Educational Background</label>
                        <textarea class="form-control" rows="5" name="educational_background"
                        placeholder="Bachelors in CS laid the foundation, while bootcamps provided practical skills. Projects offered hands-on experience, with a commitment to continuous learning ensuring mastery of HTML ..." required>{{ trim(old('educational_background')) }}</textarea>
                    </div>

                    <div class="mb-3 mt-1">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="has_pc">Do you have your personal Laptop/Desktop PC:</label>
                            <input class="form-check-input" type="checkbox" id="has_pc" name="has_pc" value="yes" checked>
                        </div>
                    </div>

                    <div class="mb-3 mt-1">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="has_wifi">Do you have wifi/ broadband internet connection:</label>
                            <input class="form-check-input" type="checkbox" id="has_wifi" name="has_wifi" value="yes" checked>
                        </div>
                    </div>

                    <!-- programming experience: -->
                    <div class="group3">
                        <div class="mb-3 mt-1">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="has_programming_experience">Do you have programming experience:</label>
                                <input class="form-check-input" type="checkbox" id="has_programming_experience" name="has_programming_experience" value="yes" checked>
                            </div>
                        </div>

                        <div class="mb-3 mt-1 programming_experience_fld">
                            <label for="programming_experience" class="form-label">
                            Describe your programming experience (if above answer is yes)
                            </label>
                            <textarea class="form-control" rows="5" id="programming_experience" name="programming_experience"
                            placeholder="Your programming experience ..." required>{{ trim(old('programming_experience')) }}</textarea>
                        </div>

                        <div class="mb-3 mt-1 programming_experience_fld">
                            <label for="programming_experience_rate" class="form-label">Rate your programming experience</label>
                            <select id="programming_experience_rate" name="programming_experience_rate"  class="form-control"> 
                                <option value="1" @if (old('programming_experience_rate') == "1") {{ 'selected' }} @endif>1</option>
                                <option value="2" @if (old('programming_experience_rate') == "2") {{ 'selected' }} @endif>2</option>
                                <option value="3" @if (old('programming_experience_rate') == "3") {{ 'selected' }} @endif>3</option>
                                <option value="4" @if (old('programming_experience_rate') == "4") {{ 'selected' }} @endif>4</option>
                                <option value="5" @if (old('programming_experience_rate') == "5") {{ 'selected' }} @endif>5</option>
                            </select>
                        </div>
                    </div>


                    <!-- android app development experience: -->
                    <div class="group3">
                        <div class="mb-3 mt-1">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="has_android_experience">Do you have android app development experience:</label>
                                <input class="form-check-input" type="checkbox" id="has_android_experience" name="has_android_experience" value="yes" checked>
                            </div>
                        </div>

                        <div class="mb-3 mt-1 android_experience_fld">
                            <label for="android_experience" class="form-label">
                            Describe your android app development (if above answer is yes)
                            </label>
                            <textarea class="form-control" rows="5" id="android_experience" name="android_experience"
                            placeholder="Your programming experience ..." required>{{ trim(old('android_experience')) }}</textarea>
                        </div>

                        <div class="mb-3 mt-1 android_experience_fld">
                            <label for="android_experience_rate" class="form-label">Rate your android app development experience</label>
                            <select id="android_experience_rate" name="android_experience_rate"  class="form-control"> 
                                <option value="1" @if (old('android_experience_rate') == "1") {{ 'selected' }} @endif>1</option>
                                <option value="2" @if (old('android_experience_rate') == "2") {{ 'selected' }} @endif>2</option>
                                <option value="3" @if (old('android_experience_rate') == "3") {{ 'selected' }} @endif>3</option>
                                <option value="4" @if (old('android_experience_rate') == "4") {{ 'selected' }} @endif>4</option>
                                <option value="5" @if (old('android_experience_rate') == "5") {{ 'selected' }} @endif>5</option>
                            </select>
                        </div>
                    </div>

                    
                    <div class="mb-3 mt-1">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="allocate_time">Do you agree to allocate 6 hours per week for 3 months to complete the training program:</label>
                            <input class="form-check-input" type="checkbox" id="allocate_time" name="allocate_time" value="yes" checked>
                        </div>
                    </div>

                    <div class="mb-3 mt-1">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="bear_cost">Do you agree to bear any cost necessary to host your developed application developed during the program:</label>
                            <input class="form-check-input" type="checkbox" id="bear_cost" name="bear_cost" value="yes" checked>
                        </div>
                    </div>
            
                </div>

            </div>

            <div class="mb-4 mt-lg-3">
                <button id="team-reg-submit" class="btn btn-danger btn-nah">Submit</button>
                <!-- <button class="btn rounded-pill pxp-subsection-cta">Save Academic Qualification</button> -->
            </div>
        </form>

    </div>
</div>

@endsection

@section('extra-foot-script')
<script>
    $(document).ready(function() {

        $('#has_programming_experience').change(function(){
            var isChecked = $(this).prop('checked');
            var value = isChecked ? $(this).val() : 'no';
            // console.log(value);

            if (value == 'no') {
                $(".programming_experience_fld").fadeOut(700);
                $('#programming_experience').removeAttr('required');
            } else {
                $(".programming_experience_fld").fadeIn(700);
                $('#programming_experience').attr('required', true);
            }
        })
        
        $('#has_android_experience').change(function(){
            var isChecked = $(this).prop('checked');
            var value = isChecked ? $(this).val() : 'no';
            // console.log(value);

            if (value == 'no') {
                $(".android_experience_fld").fadeOut(700);
                $('#android_experience').removeAttr('required');
            } else {
                $(".android_experience_fld").fadeIn(700);
                $('#android_experience').attr('required', true);
            }
        })
        
    });


</script>
@endsection