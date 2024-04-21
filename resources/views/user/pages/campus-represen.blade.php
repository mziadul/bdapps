@extends('user.layout.master')

@section('content')

<div class="team-regis">
    <div class="container">

        <h1 class="heading-one pt-4 text-center">Campus Representative Registration</h1>

        <form method="post" action="{{route('campus.representative.store')}}">

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
                <div class="row mt-2 mt-lg-4 box-div">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Your name" value="{{old('name')}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="institute" class="form-label">Institute</label>
                        <input type="text" name="institute" class="form-control" placeholder="Your Institute name" value="{{old('institute')}}" required>
                    </div>
        
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="dept" class="form-label">Department</label>
                            <input type="text" name="dept" class="form-control" placeholder="Your department" value="{{old('dept')}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <input type="number" name="semester" class="form-control" placeholder="Your semester number" value="{{old('semester')}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender"  class="form-control"> 

                                <option value="Male" @if (old('gender') == "Male") {{ 'selected' }} @endif>Male</option>

                                <option value="Female" @if (old('gender') == "Female") {{ 'selected' }} @endif>Female</option>

                                <option value="Other" @if (old('gender') == "Other") {{ 'selected' }} @endif>Other</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="t_shirt_size" class="form-label">T-Shirt Size</label>
                            <select name="t_shirt_size"  class="form-control"> 

                                <option value="S" @if (old('t_shirt_size') == "S") {{ 'selected' }} @endif>S</option>

                                <option value="M" @if (old('t_shirt_size') == "M") {{ 'selected' }} @endif>M</option>

                                <option value="L" @if (old('t_shirt_size') == "L") {{ 'selected' }} @endif>L</option>

                                <option value="XL" @if (old('t_shirt_size') == "XL") {{ 'selected' }} @endif>XL</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" name="contact_number" class="form-control" placeholder="Contact number: 018xxxxxxxx" value="{{old('contact_number')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="secondary_contact_number" class="form-label">Secondary Contact Number</label>
                            <input type="text" name="secondary_contact_number" class="form-control" placeholder="Secondary Contact number: 018xxxxxxxx" value="{{old('secondary_contact_number')}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your mailing address" value="{{old('email')}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="mailing_address" class="form-label">Mailing Address</label>
                            <input type="text" name="mailing_address" class="form-control" placeholder="Your mailing address" value="{{old('mailing_address')}}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="extra_curri_act" class="form-label">Extra Curricular Activities</label>
                        <textarea class="form-control" rows="5" name="extra_curri_act"
                        placeholder="Why you think your application will be used by a lot of people?" required>{{ trim(old('extra_curri_act')) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="why_representative" class="form-label">Why Do You Want to be the Institutional Representative</label>
                        <textarea class="form-control" rows="5" name="why_representative"
                        placeholder="Why do you want to be the institutional Representative of National Appstore Hackathon 2022?" required>{{ trim(old('why_representative')) }}</textarea>
                    </div>

                </div>
            </div>

            <div class="mb-4 mt-lg-3">
                <button class="btn btn-danger btn-nah">Submit</button>
                <!-- <button class="btn rounded-pill pxp-subsection-cta">Save Academic Qualification</button> -->
            </div>
        </form>

    </div>
</div>

@endsection