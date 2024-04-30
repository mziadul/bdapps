@extends('user.layout.master')

@section('content')

    <!--  Intro portion start  -->
    <section>

            <div class="text-white px-5" id="introportion">
                <div id="container_div">
            
                    <div class="row justify-content-center">
                        <div id="introportion_icon_head">

                            <div class="row" id="introportion_icon_row">
                    
                                <div id="introportion_icon_div">
                                    <img src="{{ asset('assets/user/img/icon_container.png') }}">
                                </div>

                                <div id="introportion_head_text_div">
                                    <p class="fw-bold" id="mainHeading">bdapps Android Academy</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="text-center mt-3">
                                <p id="main-heading-text"> <strong>bdapps Android Academy</strong> is a program to identify & train innovative app developers and help them launch & promote their applications to the general public.</p>
                            </div>
                            <div class="text-center" id="registration_div">
                                <a class="btn btn-light fw-bold" id="heading-registration-btn" type="button" href="{{route('user.registration')}}">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

    </section>    
    <!-- Intro portion end -->

    <!-- Supported by start -->
    <div id="supportedBy">

        <div id="container_div">


            <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img id="watch_video_icon" src="{{ asset('assets/user/logos/watch_video_icon.png') }}">
                        </div>
                    </div>
            </div>

            
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div id="support_img_div">
                        <img id="support-image" src="{{ asset('assets/user/img/support-images.png') }}">
                    </div>
                </div>

                <div class="col-md-8" id="overview_div">
                    <p id="overview">Overview</p>
                    <div>
                        <p id="overview-text">The goal of the program is to create pioneer app developers who will lead the charge of creating a digitally enabled ecosystem for Smart Bangladesh. Individuals from any background, with a knack for app development can apply for the program. Through the program we will provide training for 150 shortlisted app developers from around the country.  The individual will receive  a two month long technical and business training on developing and monetizing mobile applications. <br><br>Participants will not only receive government sponsored certificates which will be a great addition to any developer’s portfolio but also, top performers will earn Prize Money, Promotional Bandwidth and Awards.</p>
                    </div>
                </div>
            </div>

            
        </div>
        <p id="suppo">Supported By</p>

            <div class="regular slider">

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Digital-Bangladesh.png') }}">
                </div> --}}
                
                <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/ict.png') }}">
                </div>

                <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/mobile_game.png') }}">
                </div>

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Startup-BD.png') }}">
                </div> --}}

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/BASIS.png') }}">
                </div> --}}

                <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/robi.png') }}">
                </div>

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/MIAKI.png') }}">
                </div> --}}

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/hSenid.png') }}">
                </div> --}}

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/BDOSN.png') }}">
                </div> --}}
            
                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Preneur-Lab.png') }}">
                </div> --}}

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Innovation-Forum.png') }}">
                </div> --}}
                
                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/JCI.png') }}">
                </div> --}}

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Sikhbe-Sobai.png') }}">
                </div> --}}

                {{-- <div>
                    <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Creative-IT.png') }}">
                </div> --}}
            
            </div>


    </div>
    <!-- supported by end -->



    <!-- prize money and benefits -->
    <section id="prizeMoney">
        <div class="container-fluid pb-5" id="prizeMoneyContainer">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="text-center" id="prize-money-benefit">Prize Money and Benefits</p>
                    <div>
                        <p class="text-center" id="prize-money-text">When you graduate from the program you will become a certified android developer endorsed by <strong>Robi and ICT</strong> ministry, you will have the chance to win from a prize pool of 5,00,000 BDT and get a chance to host your app in <br>
                         <strong> My Robi and My Airtel App's</strong> showcase section.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-sm-12 justify-content-center text-center">
                    <div><img src="{{ asset('assets/user/icon/trophy.png') }}"></div>
                    <div id="champ"><p>CHAMPION</p></div>
                    <div id="champtaka"><p>&#2547 50,000</p></div>
                    <div id="promotionalBandwidth"><span>+ 50,000 BDT worth <br> Promotional Bandwidth</span></div>
                </div>
            </div>

            <div class="row justify-content-center" id="runners">

                <div class="col-sm-6 justify-content-center text-center" id="runner1">
                    <p class="text-white text-center" id="runnersup1">1st Runner Up</p>
                    <div id="runnerSupTakaBox"><p id="taka">&#2547 30,000</p></div>
                    <div id="promotionalBandwidth"><span>+ 50,000 BDT worth <br> Promotional Bandwidth</span></div>

                </div>

                <div class="col-sm-6 justify-content-center text-center" id="runner2">
                    <p class="text-white text-center" id="runnersup2">2nd Runner Up</p>
                    <div id="runnerSupTakaBox"><p id="taka">&#2547 20,000</p></div>
                    <div id="promotionalBandwidth"><span>+ 50,000 BDT worth <br> Promotional Bandwidth</span></div>
                </div>
            </div>

            <div class="row justify-content-center" id="runners45">

                <div class="col-sm-6  justify-content-center text-center" id="fourth">
                    <p class="fs-4 text-center" id="fourthBox">4th</p>
                    <div id="runnerSupTakaBox"><p id="takaBox4th5th6th_10th">50,000 BDT worth <br> Promotional Bandwidth</p></div>
                </div>

                <div class="col-sm-6 justify-content-center text-center" id="fifth">
                    <p class="fs-4 text-center" id="fifthBox">5th</p>
                    <div id="runnerSupTakaBox"><p id="takaBox4th5th6th_10th">50,000 BDT worth <br> Promotional Bandwidth</p></div>
                </div>
            </div>

            <div class="row justify-content-center" id="sixthRow">
                <div class="col justify-content-center text-center" id="sixth">
                    <p class="text-center" id="sixthBox">6th-10th</p>
                    <div id="runnerSupTakaBox"><p id="takaBox4th5th6th_10th">30,000 BDT worth <br> Promotional Bandwidth</p></div>
                </div>  
            </div>
        </div>
    </section>
    
    <!-- prize money and benefits end -->
    
    <!-- bullet points start -->

    <section id="bulletPoints">

        <div class="text-center" id="bullets">
            <p><span style="color:#B9244E"><strong> &#8226 2 months online training session </strong></span>by industry professionals and experts..</p>
            <p><span style="color:#B9244E"><strong> &#8226 Networking </strong></span>with the largest developer community of Bangladesh.</p>
            <p><span style="color:#B9244E"><strong> &#8226 Logistical support </strong></span>to monetize your application.</p>
            <p><span style="color:#B9244E"><strong> &#8226 National level exposure </strong></span>in front of country’s administrative and business leaders.</p>
        </div>

    </section>

    <!-- bullet points end -->

    <!-- Phases start -->

    <section id="phases">

        <div id="container_div">
            <div class="row justify-content-center" id="phase_timeline">
                <div class="col-md-6 ">
                    <div class="" id="roadshow_april">
                        <p>1 April 2024 - <br> 31 May 2024</p>
                    </div>
                </div>
    
                <div class="col-md-2 ">
                    <div class="text-center" id="roadshow_june">
                        <p>1 June 2024 - <br> 31 July 2024</p>
                    </div>
                </div>
    
                <div class="col-md-2 ">
                    <div class="text-center" id="roadshow_august">
                        <p>1 August 2024 - <br> 31 August 2024</p>
                    </div>
                </div>
    
                <div class="col-md-2 ">
                    <div class="" id="roadshow_september">
                        <p>September 2024</p>
                    </div>
                </div>
            </div>

        </div>





        <div class="row">
            <div class="col-sm-12">
                <div id="line_div"><img src="{{ asset('assets/user/img/line.png') }}"></div>
            </div>
        </div>

        <div id="container_div">

            <div class="row ">
                <div class="col-md-4">
                    <div id="roadshows_heading">
                        <p id="">Roadshows <br> and Online <br> Registration</p>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="text-center" id="">
                        <p id="roadshows_timeline">Timeline</p>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="" id="roadshows_phase">
                        <h4>Phase 1</h4>
                        <p>During the promotional phase bdapps Team will be hosting roadshows in all Major Cities around the country. Meanwhile aspiring participants can complete individual registration on the online form available in the website to take part in the Program. Deadline of registration is 15th May. During this time bdapps will interview the applicants and shortlist 150 individuals for the next phase of the program.</p>
                    </div>
                </div>
            </div> 

            <div class="row justify-content-center">
                <h1 class="text-center mt-4">Roadshow Dates</h1>
                <div class="col-md-12">
                    <table class="table mt-2 text-center">
                        <thead class="">
                        <tr>
                            <th scope="col">Region</th>
                            <th scope="col">Date</th>
                            <th scope="col">Venue</th>
                        </tr>
                        </thead>

                        <tr>
                            <td>Rajshahi</td>
                            <td>????</td>
                            <td>Rajshahi University</td>
                        </tr>

                        <tr>
                            <td>Rangpur</td>
                            <td>????</td>
                            <td>Bangladesh Army University of Science and Technology</td>
                        </tr>

                        <tr>
                            <td>Chittagong</td>
                            <td>????</td>
                            <td>Chittagong Independent University</td>
                        </tr>

                        <tr>
                            <td>Sylhet</td>
                            <td>????</td>
                            <td>Shahjalal University of Science & Technology (SUST)</td>
                        </tr>

                        <tr>
                            <td>Khulna</td>
                            <td>????</td>
                            <td>Khulna University</td>
                        </tr>

                        <tr>
                            <td>Barisal</td>
                            <td>????</td>
                            <td>Barisal University</td>
                        </tr>

                        <tr>
                            <td>Dhaka & Mymansingh</td>
                            <td>????</td>
                            <td>United International University</td>
                        </tr>

                    </table>
                                    
                </div>
            </div> 

        </div> 
        

    </section>

    <!-- Phases end -->


    <div id="container_div">

        <!-- Rules & guidelines start -->
        <section id="ruleS">
            <div id="rulesNguides">
                <h1 id="rulesHeading" class="pt-5 ms-5">Rules and Guidelines</h1>



                <div class="Parent d-flex pt-3" >
                    <div class="child1" id="eligi">
                        <p id="rulesHead" class="eligibility">Eligibility</p>

                        <img id="rulesCon" src="{{ asset('assets/user/icon/group.png') }}">
                    </div>

                    <div class="child2 fs-5">
                            <ul id="rules">
                                <li>&#8226 The “bdapps Android Academy” is open to all Bangladeshi citizens irrespective of age, gender, religion, educational background.</li>
                                <li>&#8226 Participants have to apply in an individual capacity.</li>
                                <li>&#8226 Participants must have access to a personal laptop or desktop computer. </li>
                                <li>&#8226 Participants must have access to broadband internet or wifi.</li>
                                <li>&#8226 Participants must make their own travel and accommodation arrangements and cover all associated costs and expenses during the Gala Round.</li>
                            </ul>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-12 mt-4">
                        <p class="" id="registrationSelectionText">Registration and Selection</p>
                    </div>
                </div>

                <div class="Parent d-flex">
                    <div class="child2 fs-5">
                            <ul  id="rules2">
                                <li>&#8226 The registration is completely free of </li>
                                <li>&#8226 Individuals with programming experience and/ or app development experience will be given preference during the selection process</li>
                                <li>&#8226 The Participants will have to go through an interview process and sign a consent form to ensure their participants for the full duration of the program</li>
                                <li>&#8226 By registering in the “Android Academy” program administered by bdapps, the participant agrees to be bound by the terms and conditions stated in these Rules and Guidelines of the program</li>
                            </ul>
                    </div>

                    <div class="child1 fs-5" id="regi">
                        <img id="rulesCon" src="{{ asset('assets/user/icon/reg_selection.png') }}">
                    </div>
                </div>

                <div class="Parent d-flex pt-3">
                    <div class="child1" id="eligi">
                        <p id="miscellaneous">Miscellaneous</p>

                        <img id="rulesCon" src="{{ asset('assets/user/icon/group1.png') }}">
                    </div>

                    <div class="child2 fs-5 mt-4">
                            <ul id="rules">
                                <li>&#8226 The intellectual property of ideas and code belongs to the participants.</li>
                                <li>&#8226 Winners prize money and other prizes will be divided into milestones based trances.</li>
                                <li>&#8226 bdapps reserves the right to change any provisions and regulations of the platform without prior notification.</li>                            
                            </ul>
                    </div>
                </div>

            </div>


            <div id="rulesNguidesResponsive">
                <h1 id="rulesHeading" class="pt-5 ms-5">Rules and Guidelines</h1>

                <div class="Parent d-flex pt-3">
                    <div class="child1" id="eligi">
                        <h5 class="eligibility" id="rulesHead" >Eligibility</h5>
                        <img src="{{ asset('assets/user/icon/Eligibility-res.png') }}">
                    </div>

                    <div class="child2 fs-5">

                            <ul id="rules">
                                <li>&#8226 The “National Appstore Hackathon 2022” is open to all Bangladeshi citizens 
                                    irrespective of age, gender, religion, educational background.</li>
                                <li>&#8226 Participants are required to work in teams consisting of a minimum of 2 to a 
                                    maximum of 4 members.</li>
                                <li>&#8226 Participants must make their own travel and accommodation arrangements and cover
                                    all associated costs and expenses in case of the physical event. For the online 
                                    event. 
                                <li>&#8226 Participants must arrange their own technical requirements to participate in each
                                    phase of the platform. (Travel incentives will be provided for few teams outside of
                                    the host district).</li>
                                <li>&#8226 All team members must be able to be present in the venue of the selected zone for 
                                    the regional round.</li>
                            </ul>


                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <hr id="horiRed" style="width:20%", size="4"  >
                </div>

                <div class="Parent d-flex pt-3">
                    <div class="child1 fs-5" id="regi">
                        <img src="{{ asset('assets/user/icon/Online Registration-res.png') }}">
                        <h5 id="rulesHead">Registration</h5>
                    </div>

                    <div class="child2 fs-5">
                            <ul  id="rules2">
                                <li>&#8226 One team can include 2 to 4 members.</li>
                                <li>&#8226 Team members can be from any educational institution/organization.</li>
                                <li>&#8226 Registered teams must include correct information about their team on the provided 
                                    form.</li>
                                <li>&#8226 The registration is completely free of cost.</li>
                                <li>&#8226 By registering in the “National Appstore Hackathon 2022” administered by bdapps, 
                                    the participant agrees to be bound by the terms and conditions stated in these Rules
                                    and Guidelines of the event.</li>
                            </ul>
                    </div>
                </div>

                <div class="Parent d-flex pt-3">
                    <h4 id="round">Round Details</h4>
                    <div class="child1">
                        <img src="{{ asset('assets/user/icon/Regional Round-res.png') }}">
                        <h5 id="rulesHead">Regional Round</h5>
                    </div>

                    <div class="child2 fs-5">
                            <ul id="rules">
                                <li>&#8226 Teams can participate with an idea/prototype/MVP/Complete App.</li>
                                <li>&#8226 The app can be of any genre including and not limited to – Games, Lifestyle, Education, 
                                    AR/VR, Business, Communication, Entertainment, Medical, Utility etc.</li>
                                <li>Teams have to give a presentation In front of the judges about their product. 
                                    Judging criteria includes – feasibility, originality, Potential User Base,
                                    Quality of planning.
                            </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <hr id="horiRed" style="width:20%", size="4"  >
                </div>

                <div class="Parent d-flex pt-3">
                    <div class="child1 fs-5" id="onlRound">
                        <img src="{{ asset('assets/user/icon/Online Round-res.png') }}">
                        <h5 id="rulesHead">Online Round</h5>
                    </div>

                    <div class="child2 fs-5">
                            <ul  id="rules2">
                                <li>&#8226 Teams will be assigned mentors to help them develop a MVP of their idea or 
                                    polish up their existing application.</li>
                                <li>&#8226 Team members must attend all the sessions. The mentor's remarks will be 
                                    accumulated with the judge's assessment in the final round. Teams will be judged 
                                    based on active participation, enthusiasm and timely submission of assigned tasks by
                                    the mentors.</li>
                            </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <hr id="horiRed" style="width:20%", size="4"  >
                </div>


                <div class="Parent d-flex pt-3">
                    <div class="child1" id="nationalRound">
                        <img src="{{ asset('assets/user/icon/National Round-res.png') }}">
                        <h5 id="rulesHead">National Round</h5>
                    </div>

                    <div class="child2 fs-5">
                            <ul id="rules">
                                <li>&#8226 Teams will attend a 28-hour long hackathon in a selected venue for the 
                                    national round. This will include overnight stay in the venue. All the team 
                                    members of the selected teams have to be present during the full duration of the 
                                    event. Adequate food supplies and security will be provided to the participants.</li>
                                <li>&#8226 Final round will be judged in 2 segments. First the judges will visit the
                                    teams and view their MVP/App Firsthand. In the second segment, teams will 
                                    pitch their idea using a presentation In front of the judges. Judging criteria 
                                    includes Progress, Understanding of the user base, Business model, Marketing 
                                    Strategy etc.
                            </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <hr id="horiRed" style="width:20%", size="4"  >
                </div>

                <div class="Parent d-flex pt-3">
                    <div class="child1 fs-5" id="misce">
                        <img src="{{ asset('assets/user/icon/Miscellaneous-res.png') }}">
                        <h5 id="rulesHead">Miscellaneous</h5>
                    </div>

                    <div class="child2 fs-5">
                            <ul  id="rules2">
                                <li>&#8226 The intellectual property of your idea and code belongs to you.</li>
                                <li>&#8226 Winners prize money will be divided into milestones based trances.</li>
                                <li>&#8226 bdapps reserves the right to change any dates, timing, provisions and regulations of the platform without prior notification.</li>
                            </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>






    <!--  aboutOfBdapps start  -->
    <section id="aboutOfBdappsSection">

            <div class="text-white" id="aboutOfBdapps">
                <div id="container_div">

                    <div class="row">
                        <div class="col-md-8">
                            <p id="aboutOfBdappsHeading">About of bdapps</p>
                            <div>
                                <p id="aboutOfBdappsHeading-text">
                                    bdapps is a local app store and API hub which enables content providers and application developers to monetize their applications. Besides APIs, bdapps also offers 24/7 developer and admin support along with the option to monetize both downloadable and non-downloadable apps. Currently bdapps has the largest community of developers in the country. In 2021, the platform was declared as the National App Store of Bangladesh by the ICT Division.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center">
                                <img id="aboutOfBdapps-image" src="{{ asset('assets/user/img/bdapps_image.png') }}">
                            </div>
                        </div>
                    </div>

                </div> 
                    
            </div> 

    </section>    
    <!-- aboutOfBdapps end -->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Modal Header -->
            <!-- <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div> -->

            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close popup-btn" data-bs-dismiss="modal"></button>
                <a href="https://www.hasinaandfriends.gov.bd/" target="_blank">
                    <img class="img-fluid" src="{{ asset('assets/user/popup/popup.jpeg') }}">
                </a>
            </div>

            <!-- Modal footer -->
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div> -->

            </div>
        </div>
    </div>
    <!-- end of the modal -->


@endsection

@section('extra-foot-script')
<script type="text/javascript">

    window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
       // $('#myModal').modal('show');
    }


    console.log('home page');
    // fbq('track', 'PageView');
    // fbq('track', 'ViewContent', {content_type: "Home Page"});
    fbq('trackCustom', 'HomePageView', {
        content_type: "Home Page View",
        content_name: "HomePage",
    });

    
   
</script>
@endsection