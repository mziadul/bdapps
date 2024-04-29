@extends('user.layout.master')

@section('extra-head-script')
<style>

    input[type="text"],
    input[type="email"] {
        background-color: #EEEEEE !important;
    }

    select{
        background-color: #EEEEEE !important;


    }

    #team-reg-submit{
        margin-top: 3rem;
        margin-bottom: 10rem;
        width: 11rem;
        height: 2.8rem;
    }
    #reg_text{
        color: #8F1D43;
        font-weight: 700;
    }


    .form-check-input:checked{
        background-color: #8F1D43;
        border-color: #8F1D43;
    }

    /* input{
        background-color: #EEEEEE !important;
    } */

    #reg_section{
        background: url("/assets/user/img/reg_background.png") no-repeat;
        background-size: cover;

    }
    .team-regis {
        margin-top: 7.3rem;        
    }

    #bdapps_android_logo{
        margin-top: 4rem;
        margin-bottom: 2rem;
        width: 70%;
    }


    .box-div {
        border: 3px solid #cb878729;
        background: #FFFFFF;        
        border-radius: 20px;
        padding: 15px;
    }
    .btn-nah{

        width: 200px;
        color: #8F1D43;
        font-weight: 600;
        font-size: 120%;
        border-radius: 8px;
        background: #FFFFFF;
        border: 1px;
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
        background-color: #FFFFFF;     
        margin-top: 8px;
        margin-bottom: 8px;
        border-radius: 10px;
    }
    .res-star {
        color: red;
    }
</style>
@endsection

@section('content')

    <section id="reg_section">
        <div class="team-regis">
            <div class="container">

                
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img id="bdapps_android_logo" src="{{ asset('assets/user/logos/logo.png') }}">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-10">
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
        
                                    <h1 class="heading-one pt-2 text-center" id="reg_text">Registration Form</h1>
        
                
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-1">
                                            <label for="full_name" class="form-label">
                                                Full Name 
                                                <span class="res-star">*</span>
                                            </label>
                                            <input type="text" name="full_name" class="form-control" placeholder="Enter your name" value="{{old('full_name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-1">
                                            <label for="mobile_number" class="form-label">
                                                Mobile Number
                                                <span class="res-star">*</span>
                                            </label>
                                            <input type="text" name="mobile_number" class="form-control" placeholder="01xxxxxxxxx" value="{{old('mobile_number')}}" minlength="11" maxlength="11" required>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-1">
                                            <label for="email" class="form-label">
                                                Email
                                                <span class="res-star">*</span>
                                            </label>
                                            <input type="email" name="email" class="form-control" placeholder="info@xyz.com" value="{{old('email')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-1">
                                            <label for="home_address" class="form-label">
                                                Home Address
                                                <span class="res-star">*</span>
                                            </label>
                                            <input type="text" name="home_address" class="form-control" placeholder="Manirampur Jessore" value="{{old('home_address')}}" required>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-1">
                                            <label for="current_address" class="form-label">
                                                Current Address
                                                <span class="res-star">*</span>
                                            </label>
                                            <input type="text" name="current_address" class="form-control" placeholder="House 8, Road 11, Banani Dhaka" value="{{old('current_address')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-1">
                                            <label for="division" class="form-label">
                                                Division
                                                <span class="res-star">*</span>
                                            </label>
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
                                        <label for="educational_background" class="form-label">
                                            Educational Background
                                            <span class="res-star">*</span>
                                        </label>
                                        <textarea class="form-control" id="editor11" name="educational_background"
                                        placeholder="Bachelors in CS laid the foundation, while bootcamps provided practical skills. Projects offered hands-on experience, with a commitment to continuous learning ensuring mastery of HTML ..." required>{{ trim(old('educational_background')) }}</textarea>
                                    </div>
                
                                    <div class="mb-3 mt-1">
                                        <div class="form-check form-switch">
                                            <label class="form-check-label" for="has_pc">
                                                Do you have your personal Laptop/Desktop PC:
                                                <span class="res-star">*</span>
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="has_pc" name="has_pc" value="yes" checked>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 mt-1">
                                        <div class="form-check form-switch">
                                            <label class="form-check-label" for="has_wifi">
                                                Do you have wifi/ broadband internet connection:
                                                <span class="res-star">*</span>
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="has_wifi" name="has_wifi" value="yes" checked>
                                        </div>
                                    </div>
                
                                    <!-- programming experience: -->
                                    <div class="group3">
                                        <div class="mb-3 mt-1">
                                            <div class="form-check form-switch">
                                                <label class="form-check-label" for="has_programming_experience">
                                                    Do you have programming experience:
                                                    <span class="res-star">*</span>
                                                </label>
                                                <input class="form-check-input" type="checkbox" id="has_programming_experience" name="has_programming_experience" value="yes" checked>
                                            </div>
                                        </div>
                
                                        <div class="mb-3 mt-1 programming_experience_fld">
                                            <label for="programming_experience" class="form-label">
                                            Describe your programming experience (if above answer is yes)
                                            </label>
                                            <textarea class="form-control programming_experience" id="editor22" name="programming_experience"
                                            placeholder="Your programming experience ..." required>{{ trim(old('programming_experience')) }}</textarea>
                                        </div>
                
                                        <div class="mb-3 mt-1 programming_experience_fld">
                                            <label for="programming_experience_rate" class="form-label">
                                                Rate your programming experience
                                            </label>
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
                                                <label class="form-check-label" for="has_android_experience">
                                                    Do you have android app development experience:
                                                    <span class="res-star">*</span>
                                                </label>
                                                <input class="form-check-input" type="checkbox" id="has_android_experience" name="has_android_experience" value="yes" checked>
                                            </div>
                                        </div>
                
                                        <div class="mb-3 mt-1 android_experience_fld">
                                            <label for="android_experience" class="form-label">
                                            Describe your android app development (if above answer is yes)
                                            </label>
                                            <textarea class="form-control android_experience" id="editor33" name="android_experience"
                                            placeholder="Your programming experience ..." required>{{ trim(old('android_experience')) }}</textarea>
                                        </div>
                
                                        <div class="mb-3 mt-1 android_experience_fld">
                                            <label for="android_experience_rate" class="form-label">
                                                Rate your android app development experience
                                            </label>
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
                                            <label class="form-check-label" for="allocate_time">
                                                Do you agree to allocate 6 hours per week for 3 months to complete the training program:
                                                <span class="res-star">*</span>
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="allocate_time" name="allocate_time" value="yes" checked>
                                        </div>
                                    </div>
                
                                    <div class="mb-3 mt-1">
                                        <div class="form-check form-switch">
                                            <label class="form-check-label" for="bear_cost">
                                                Do you agree to bear any cost necessary to host your developed application developed during the program:
                                                <span class="res-star">*</span>
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="bear_cost" name="bear_cost" value="yes" checked>
                                        </div>
                                    </div>
                            
                                </div>
                
                            </div>
        
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <button id="team-reg-submit" class="btn btn-danger btn-nah">Submit</button>
                                    </div>
                                </div>
                            </div>
                
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>



@endsection

@section('extra-foot-script')
<script>
    CKEDITOR.replace('editor11', {
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'styles', items: ['Format'] }
        ]
    });
    CKEDITOR.replace('editor22', {
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'styles', items: ['Format'] }
        ]
    });
    CKEDITOR.replace('editor33', {
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'styles', items: ['Format'] }
        ]
    });

    $(document).ready(function() {

        $('#has_programming_experience').change(function(){
            var isChecked = $(this).prop('checked');
            var value = isChecked ? $(this).val() : 'no';
            // console.log(value);

            if (value == 'no') {
                $(".programming_experience_fld").fadeOut(700);
                $('.programming_experience').removeAttr('required');
            } else {
                $(".programming_experience_fld").fadeIn(700);
                $('.programming_experience').attr('required', true);
            }
        })
        
        $('#has_android_experience').change(function(){
            var isChecked = $(this).prop('checked');
            var value = isChecked ? $(this).val() : 'no';
            // console.log(value);

            if (value == 'no') {
                $(".android_experience_fld").fadeOut(700);
                $('.android_experience').removeAttr('required');
            } else {
                $(".android_experience_fld").fadeIn(700);
                $('.android_experience').attr('required', true);
            }
        })

        
    });

        

</script>
@endsection