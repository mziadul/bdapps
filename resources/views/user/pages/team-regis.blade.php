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
</style>
@endsection

@section('content')

<div class="team-regis">
    <div class="container">

        <div class="pt-4" style="padding: 22% 0%">
            <h1 class="heading-one pt-4 text-center">Registration closed!</h1>
            <h6 class="text-center pt-4">Shortlisted teams for regional rounds will be notified soon.</h6>
        </div>

        @if (0)
        <h1 class="heading-one pt-4 text-center">Team Registration</h1>

        <form method="post" action="{{route('team.registration.store')}}">

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
                <h3 class="heading-three">Part 1:</h3>
                <div class="row mt-2 mt-lg-4 box-div">

                    <div class="mb-3">
                        <label for="team_name" class="form-label">Team Name</label>
                        <input type="text" name="team_name" class="form-control" placeholder="Your team name" value="{{old('team_name')}}" required>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="team_contact_number" class="form-label">Team Contact Number</label>
                            <input type="text" name="team_contact_number" class="form-control" placeholder="Contact number: 018xxxxxxxx" value="{{old('team_contact_number')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="team_alt_contact_number" class="form-label">Team Alternate Contact Number</label>
                            <input type="text" name="team_alt_contact_number" class="form-control" placeholder="Provide number of another team member: 018xxxxxxxx" value="{{old('team_alt_contact_number')}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="team_email" class="form-label">Team Email</label>
                            <input type="text" name="team_email" class="form-control" placeholder="Team email" value="{{old('team_email')}}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="team_alt_email" class="form-label">Team Alternate Email</label>
                            <input type="text" name="team_alt_email" class="form-control" placeholder="Team alternate email" value="{{old('team_alt_email')}}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="team_mailing_address" class="form-label">Team Mailing Address</label>
                        <input type="text" name="team_mailing_address" class="form-control" placeholder="Your team mailing address" value="{{old('team_mailing_address')}}" required>
                    </div>

                </div>


                <h3 class="heading-three pt-4 mt-4">Part 2:</h3>
                <div class="row mt-2 mt-lg-4 box-div">

                    <div class="mb-3">
                        <label for="zone" class="form-label">Regional Round Venue (Select Zone)</label>
                        <select id="regional_zone" name="zone"  class="form-control"> 

                          <option value="Zone 1: Rajshahi & Rangpur" @if (old('zone') == "Zone 1: Rajshahi & Rangpur") {{ 'selected' }} @endif>Zone 1: Rajshahi & Rangpur</option>

                          <option value="Zone 2: Sylhet" @if (old('zone') == "Zone 2: Sylhet") {{ 'selected' }} @endif
                            >Zone 2: Sylhet</option>

                          <option value="Zone 3: Khulna & Barishal" @if (old('zone') == "Zone 3: Khulna & Barishal") {{ 'selected' }} @endif>Zone 3: Khulna & Barishal</option>

                          <option value="Zone 4: Chattogram" @if (old('zone') == "Zone 4: Chattogram") {{ 'selected' }} @endif
                           >Zone 4: Chattogram</option>

                          <option value="Zone 5: Dhaka & Mymensingh" @if (old('zone') == "Zone 5: Dhaka & Mymensingh") {{ 'selected' }} @endif>Zone 5: Dhaka & Mymensingh</option>
                        </select>
                    </div>

                    <div class="mb-3 ms-3 form-check">
                        <input type="checkbox" class="form-check-input" name="incentive" value="1" @if( old('incentive')) == 1 ) checked @endif>
                        <label class="form-check-label" for="check1">Apply for a travel incentive for your team (Only applicable for teams participating from outside of the host district)</label>
                    </div>

                </div>



                <h3 class="heading-three pt-4 mt-4">Part 3:</h3>
                <div class="row  mt-3 mt-lg-4 box-div">
                    @for ($i = 1; $i <= 4; $i++)
                    <div class="row mt-3 mt-lg-4 box-div2">
                        <h5>Member: {{$i}} {{ in_array($i, [3,4]) ? '(optional)' : '*' }}</h5>

                        <div class="mb-3">
                            <label for="name-{{$i}}" class="form-label">Name</label>
                            <input type="text" name="name-{{$i}}" class="form-control" placeholder="Your Name" value="{{old('name-'.$i)}}" @if ( in_array($i, [1,2]) ) {{'required'}} @endif>
                        </div>

                        <div class="mb-3">
                            <label for="institution-{{$i}}" class="form-label">Institution</label>
                            <input type="text" name="institution-{{$i}}" class="form-control" placeholder="Your Institution Name" value="{{old('institution-'.$i)}}" @if ( in_array($i, [1,2]) ) {{'required'}} @endif>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gender-{{$i}}" class="form-label">Gender</label>
                                <select name="gender-{{$i}}"  class="form-control"> 

                                    <option value="Male" @if (old('gender-'.$i) == "Male") {{ 'selected' }} @endif>Male</option>

                                    <option value="Female" @if (old('gender-'.$i) == "Female") {{ 'selected' }} @endif>Female</option>

                                    <option value="Other" @if (old('gender-'.$i) == "Other") {{ 'selected' }} @endif>Other</option>

                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="t_shirt_size-{{$i}}" class="form-label">T-Shirt Size</label>
                                <select name="t_shirt_size-{{$i}}"  class="form-control"> 

                                    <!-- <option value="S" @if (old('t_shirt_size-'.$i) == "S") {{ 'selected' }} @endif>S</option> -->

                                    <option value="M" @if (old('t_shirt_size-'.$i) == "M") {{ 'selected' }} @endif>M</option>

                                    <option value="L" @if (old('t_shirt_size-'.$i) == "L") {{ 'selected' }} @endif>L</option>

                                    <option value="XL" @if (old('t_shirt_size-'.$i) == "XL") {{ 'selected' }} @endif>XL</option>

                                    <option value="XXL" @if (old('t_shirt_size-'.$i) == "XXL") {{ 'selected' }} @endif>XXL</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-top: 37px">
                                Size
                            </button>
                        </div>
                        
                    </div>
                    @endfor
                </div>


                <h3 class="heading-three pt-4 mt-4">Part 4:</h3>
                <div class="row mt-2 mt-lg-4 box-div">

                    <div class="mb-3">
                        <label for="application_title" class="form-label">Application Title</label>
                        <input type="text" name="application_title" class="form-control" placeholder="Your application title" value="{{old('application_title')}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="application_category" class="form-label">Application Category</label>
                        <select id="application_category" name="application_category"  class="form-control"> 

                          <option value="Educational" @if (old('application_category') == "Educational") {{ 'selected' }} @endif>Educational</option>
                          <option value="Lifestyle" @if (old('application_category') == "Lifestyle") {{ 'selected' }} @endif>Lifestyle</option>
                          <option value="Social Media" @if (old('application_category') == "Social Media") {{ 'selected' }} @endif>Social Media</option>
                          <option value="Productivity" @if (old('application_category') == "Productivity") {{ 'selected' }} @endif>Productivity</option>
                          <option value="Entertainment" @if (old('application_category') == "Entertainment") {{ 'selected' }} @endif>Entertainment</option>
                          <option value="Games" @if (old('application_category') == "Games") {{ 'selected' }} @endif>Games</option>
                          <option value="Service" @if (old('application_category') == "Service") {{ 'selected' }} @endif>Service</option>
                          <option value="Other" @if (old('application_category') == "Other") {{ 'selected' }} @endif>Other</option>
                    
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="application_development_stage" class="form-label">Application Development Stage</label>
                        <select id="application_development_stage" name="application_development_stage"  class="form-control"> 

                          <option value="Idea" @if (old('application_development_stage') == "Idea") {{ 'selected' }} @endif>Idea</option>
                          <option value="Prototype" @if (old('application_development_stage') == "Prototype") {{ 'selected' }} @endif>Prototype</option>
                          <option value="MVP" @if (old('application_development_stage') == "MVP") {{ 'selected' }} @endif>MVP</option>
                          <option value="Final Product" @if (old('application_development_stage') == "Final Product") {{ 'selected' }} @endif>Final Product</option>
                    
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="application_desc" class="form-label">Application Description</label>
                        <textarea class="form-control" rows="5" name="application_desc"
                        placeholder="Why you think your application will be used by a lot of people?">{{ trim(old('application_desc')) }}</textarea>
                    </div>

                </div>

            </div>

            <div class="mb-4 mt-lg-3">
                <button id="team-reg-submit" class="btn btn-danger btn-nah">Submit</button>
                <!-- <button class="btn rounded-pill pxp-subsection-cta">Save Academic Qualification</button> -->
            </div>
        </form>


        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title text-center">T-Shirt Size</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Chest(Wi)</th>
                                <th>Sleeve(Le)</th>
                                <th>Body(Le)</th>
                                <th>Shoulder(Le)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">M</td>
                                <td class="text-center">40</td>
                                <td class="text-center">8.5</td>
                                <td class="text-center">28</td>
                                <td class="text-center">17</td>
                            </tr>
                            <tr>
                                <td class="text-center">L</td>
                                <td class="text-center">42</td>
                                <td class="text-center">9</td>
                                <td class="text-center">29</td>
                                <td class="text-center">18</td>
                            </tr>
                            <tr>
                                <td class="text-center">XL</td>
                                <td class="text-center">44</td>
                                <td class="text-center">9.5</td>
                                <td class="text-center">30</td>
                                <td class="text-center">19</td>
                            </tr>
                            <tr>
                                <td class="text-center">XXL</td>
                                <td class="text-center">46</td>
                                <td class="text-center">10</td>
                                <td class="text-center">31</td>
                                <td class="text-center">20</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->

                </div>
            </div>
        </div>
        @endif

    </div>
</div>

@endsection

@section('extra-foot-script')
<script type="text/javascript">

    console.log('Team Registration Page');
    // fbq('track', 'PageView');
    fbq('track', 'ViewContent', {
        content_type: "Registration Page View",
        content_name: "RegistrationPage",
    });

    $('#team-reg-submit').click(function() {
        console.log('submit team reg page');
        var application_development_stage = $("#application_development_stage option:selected").val(); 
        console.log(application_development_stage);

        var application_category = $("#application_category option:selected").val();
        console.log(application_category);

        var regional_zone = $("#regional_zone option:selected").val();
        console.log(regional_zone);

        const ua = navigator.userAgent;
        let device = '';
        if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
            device = "tablet";
        } else if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
            device = "mobile";
        } else {
            device = "desktop";
        }
        console.log(device);


        fbq('track', 'CompleteRegistration', {
            registration_method: device,
            user_carrier: 'wifi',
            regional_round_venue: regional_zone,
            application_category: application_category,
            application_development_stage: application_development_stage,
        });


    });
   
</script>
@endsection