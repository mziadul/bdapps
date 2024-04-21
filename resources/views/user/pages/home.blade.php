@extends('user.layout.master')

@section('content')

    <!--  Intro portion start  -->
    <section>
        <div class="text-white px-5" id="introportion">
            <div class="container-fluid pt-5 pb-3" id="intro">

                <div class="row">
                    <marquee>
                        <p>তথ্য ও যোগাযোগ প্রযুক্তি বিভাগের উদ্যোগে উদ্বোধন হলো ‘হাসিনা এন্ড ফ্রেন্ডস’। ভিজিট করুন: 
                        <a href="https://www.hasinaandfriends.gov.bd/" target="_blank">www.hasinaandfriends.gov.bd</a></p>
                    </marquee>
                    <div class="col-sm-6">
                        <p class="fw-bold" id="mainHeading">bdapps National Hackathon 2022</p>
                        <p class="text-start" id="introPara"><strong id="introParaStrong">bdapps National Hackathon 
                            2022</strong> is a platform to identify launch and promote innovative and useful 
                            apps developed by our local developers.</p>
                    </div>

                    <div class="col-sm-6">
                        <div id="mainLogoDiv">
                            <img class="img-fluid" id="mainLogo" src="{{ asset('assets/user/logos/main-logo.png') }}">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <p id="overviewHeading">Overview</p>
                        <p id="overviewPara">bdapps National Hackathon 2022 is a 
                            platform to identify, launch and promote innovative and useful apps developed by our local 
                            developers. Participants can form teams of 2-4 to take part in this open innovation 
                            challenge to present and validate their App idea in front of industry experts. 
                            Winning teams will gain monetary support, invaluable insight and tools required to turn their 
                            apps into a household name across the country and abroad.</p> 
                    </div>

                    <div class="col-sm-6 justify-content-center">
                        <p class="fs-3 fw-bold" id="question">Can you make the next viral app?</p>
                        <div id="regNowBtn"><a class="btn fs-3 fw-bold" id="regnowbtn" type="button" href="">Registration Closed</a></div>
                        <p id="deadline">Team Registration Deadline: 7th August, 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- Intro portion end -->




    <!-- Supported by start -->
    <div id="supportedBy">

        <p id="suppo">Supported by</p>

        <div class="regular slider">

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Digital-Bangladesh.png') }}">
            </div>
            
            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/ICT.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Mobile-Game-App.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Startup-BD.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/BASIS.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Robi.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/MIAKI.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/hSenid.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/BDOSN.png') }}">
            </div>
          
            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Preneur-Lab.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Innovation-Forum.png') }}">
            </div>
            
            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/JCI.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Sikhbe-Sobai.png') }}">
            </div>

            <div>
                <img id="slideLogo" src="{{ asset('assets/user/logos/suppoBy/Creative-IT.png') }}">
            </div>
         
        </div>
    </div>
    <!-- supported by end -->



    <!-- prize money and benefits -->
    <section id="prizeMoney">
        <div class="container-fluid pb-5" id="prizeMoneyContainer">

            <div class="row justify-content-center">
                <div class="col text-center">

                    <p class="text-white fw-bold" id="prizeHeading">Prize Money and Benefits</p>
                    <p class=" text-white" id="prizeMonPara">Prize money worth <strong id="bdt">5,00,000 BDT</strong> for the top 10 teams.</p>
                
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="col-sm-12 justify-content-center text-center">

                    <div><img src="{{ asset('assets/user/Icons/Trophy 500 x 600-01.png') }}"></div>
                    <div id="champ"><p>Champion</p></div>
                    <div id="champtaka"><p>&#2547 2,00,000</p></div>

                </div>
            </div>



            <div class="row justify-content-center" id="runners">

                <div class="col-sm-6 justify-content-center text-center" id="runner1">
                    <p class="text-white text-center" id="runnersup1">1st Runner Up</p>
                    <hr id="hori" style="width:250px", size="3">
                    <p id="taka">&#2547 1,25,000</p>
                    <hr id="horibot" style="width: 250px", size="3">
                </div>

                <div class="col-sm-6 justify-content-center text-center" id="runner2">
                    <p class="text-white text-center" id="runnersup2">2nd Runner Up</p>
                    <hr id="hori" style="width:250px", size="3">
                    <p id="taka">&#2547 75,000</p>
                    <hr id="horibot" style="width:250px", size="3">
                </div>
            </div>



            <div class="row justify-content-center" id="runners45">

                <div class="col-sm-6  justify-content-center text-center" id="fourth">
                    <p class="fs-4 text-center" id="fourthBox">4th</p>
                    <hr id="hori45" style="width:200px", size="3">
                    <p id="taka45">&#2547 30,000</p>
                    <hr id="horibot45" style="width:200px", size="3">
                </div>

                <div class="col-sm-6 justify-content-center text-center" id="fifth">
                    <p class="fs-4 text-center" id="fifthBox">5th</p>
                    <hr id="hori45" style="width:200px", size="3">
                    <p id="taka45">&#2547 20,000</p>
                    <hr id="horibot45" style="width:200px", size="3">
                </div>
            </div>



            <div class="row justify-content-center" id="sixthRow">

                <div class="col  justify-content-center text-center" id="sixth">
                    <p class="text-center" id="sixthBox">6th</p>
                    <hr id="hori6" style="width:170px", size="3">
                    <p id="taka6">&#2547 10,000</p>
                    <hr id="horibot6" style="width:170px", size="3">
                </div>

                <div class="col justify-content-center text-center" id="sixth">
                    <p class="text-center" id="sixthBox">7th</p>
                    <hr id="hori6" style="width:170px", size="3">
                    <p id="taka6">&#2547 10,000</p>
                    <hr id="horibot6" style="width:170px", size="3">
                </div>

                <div class="col justify-content-center text-center" id="sixth">
                    <p class="text-center" id="sixthBox">8th</p>
                    <hr id="hori6" style="width:170px", size="3">
                    <p id="taka6">&#2547 10,000</p>
                    <hr id="horibot6" style="width:170px", size="3">
                </div>

                <div class="col justify-content-center text-center" id="sixth">
                    <p class="text-center" id="sixthBox">9th</p>
                    <hr id="hori6" style="width:170px", size="3">
                    <p id="taka6">&#2547 10,000</p>
                    <hr id="horibot6" style="width:170px", size="3">
                </div>

                <div class="col justify-content-center text-center" id="sixth">
                    <p class="text-center" id="sixthBox">10th</p>
                    <hr id="hori6" style="width:170px", size="3">
                    <p id="taka6">&#2547 10,000</p>
                    <hr id="horibot6" style="width:170px", size="3">
                </div>
                
            </div>

        </div>
    </section>
    
    <!-- prize money and benefits end -->
    
    



    
    <!-- bullet points start -->

    <section id="bulletPoints">

        <div class="text-center" id="bullets">
            <p><span style="color:#B9244E"><strong> &#8226 5 months grooming and training session </strong></span>by industry professionals and experts.</p>
            <p><span style="color:#B9244E"><strong> &#8226 Networking </strong></span>with the largest developer community of Bangladesh.</p>
            <p><span style="color:#B9244E"><strong> &#8226 Logistical support </strong></span>to set up a business around your application.</p>
            <p><span style="color:#B9244E"><strong> &#8226 National level exposure </strong></span>in front of country’s administrative and business leaders.</p>
        </div>

    </section>

    <!-- bullet points end -->





    <!-- Phases start -->

    <section id="phases">
        <p id="timeLine">Timeline</p>
        <div class="container-fluid">


            <div class="row" id="phasesRow">

                <div class="col-3  g-0" id="phase">
                    <p id="phaseNum">Phase 1</p><p class="fs-2 g-0" id="smallCircle">&#9900</p> 
                    <p id="dateAnnounce">(Date: 22 Jun - 07 Aug)</p><p class="verline"></p>
                </div>

                <div class="col-1" id="phaseICon">
                    <div id="phaseIcon">
                        <img src="{{ asset('assets/user/Icons/Online Registration-01.png') }}">
                    </div>

                </div>

                <div class="col-8" id="phaseDetail">
                    <h4 id="phaseHeading">Online registration</h4>
                    <p id="phasePara">Aspiring participants will complete team registration and submit their ideas on the 
                        online form available in the website to take part in the Hackathon. Deadline of 
                        registration is 7th August.</p>
                </div>

            </div>



            <div class="row" id="phasesRow">

                <div class="col-3  g-0" id="phase">
                    <p id="phaseNum">Phase 2</p><p class="fs-2 g-0" id="smallCircle">&#9900</p> 
                    <p id="dateAnnounce">(Date: 12 Aug - 10 Sep)</p><p class="verline"></p>
                </div>

                <div class="col-1" id="phaseICon">
                    <div id="phaseIcon">
                        <img src="{{ asset('assets/user/Icons/Regional Round-01.png') }}">
                    </div>

                </div>

                <div class="col-8" id="phaseDetail">
                    <h4 id="phaseHeading">Regional Round</h4>
                    <p id="phasePara">Selected teams participate in their respective regional 
                        rounds with their idea/product and top 5 will be selected as regional champions.</p>
                </div>

            </div>




            <div class="row" id="phasesRow">

                <div class="col-3  g-0" id="phase">
                    <p id="phaseNum">Phase 3</p><p class="fs-2 g-0" id="smallCircle">&#9900</p> 
                    <p id="dateAnnounce">(Date: 11 Sep - 1 Oct)</p><p class="verline"></p>
                </div>

                <div class="col-1" id="phaseICon">
                    <div id="phaseIcon">
                        <img src="{{ asset('assets/user/Icons/Online Round-01.png') }}">
                    </div>

                </div>

                <div class="col-8" id="phaseDetail">
                    <h4 id="phaseHeading">Online Round</h4>
                    <p id="phasePara">Winners from the regional rounds will go through a month-long 
                        online training and assessment session to create a MVP from their idea or polish their 
                        already existing product. </p>
                </div>

            </div>



            <div class="row" id="phasesRow">

                <div class="col-3  g-0" id="phase">
                    <p id="phaseNum">Phase 4</p><p class="fs-2 g-0" id="smallCircle">&#9900</p> 
                    <p id="dateAnnounce">(Date: 2 Oct - 15 Oct)</p><p class="verline"></p>
                </div>

                <div class="col-1" id="phaseICon">
                    <div id="phaseIcon">
                        <img src="{{ asset('assets/user/Icons/National Round-01.png') }}">
                    </div>

                </div>

                <div class="col-8" id="phaseDetail">
                    <h4 id="phaseHeading">National Round</h4>
                    <p id="phasePara">All regionals champions will participate in the National 
                        round in order to snatch the title of the National Champion. </p>
                </div>

            </div>



            <div class="row" id="phase5">

                <div class="col-3  g-0" id="phase">
                    <p id="phaseNum">Phase 5</p><p class="fs-2 g-0" id="smallCircle">&#9900</p> 
                    <p id="dateAnnounce">(Date: -)</p><p id="phase5line" class="verline"></p>
                </div>

                <div class="col-1" id="phaseICon">
                    <div id="phaseIcon">
                        <img src="{{ asset('assets/user/Icons/Hand Holding Program for National Winners-01.png') }}">
                    </div>

                </div>

                <div class="col-8" id="phaseDetail">
                    <h4 id="phaseHeading5">Hand Holding Program for National Winners </h4>
                    <p id="phasePara">Top 10 Teams from the hackathon will be offered a 5 month 
                        long training and mentorship program. This will include support to develop their final 
                        product, marketing and branding training, business and logistics support and national
                         level media exposure for themselves and their product.  </p>
                </div>

            </div>

            <div class="d-flex justify-content-center">
                <hr id="hori2" style="width:450px", size="4"  >
            </div>


            <div class="d-flex justify-content-center">
                <p id="phaseRegHeading">Regional Round Dates</p>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <table class="table table-bordered border-white ">
                        <thead>
                        <tr id="tableHeaders">
                            <th scope="col">Region</th>
                            <th scope="col">Date</th>
                            <th scope="col">Venue</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr id="tableContent">
                            <td>Rajshahi & Rangpur</td>
                            <td>Aug 12</td>
                            <td>Rajshahi University</td>
                        </tr>

                        <tr id="tableContent">
                            <td>Chittagong</td>
                            <td>Aug 20</td>
                            <td>Chittagong Independent University</td>
                        </tr>

                        <tr id="tableContent">
                            <td>Sylhet</td>
                            <td>Aug 27</td>
                            <td>SUST</td>
                        </tr>

                        <tr id="tableContent">
                            <td>Khulna and Barisal</td>
                            <td>Sep 03</td>
                            <td>Khulna University</td>
                        </tr>

                        <tr id="tableContent">
                            <td>Dhaka & Mymansingh</td>
                            <td>Sep 10</td>
                            <td>UIU</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="d-flex justify-content-center pt-3">
                <h3 id="mentHeading">Online Mentorship Session</h3>
            </div>

            <div class="d-flex justify-content-center text-center" id="ment">
                <p>11 Sep - 01 Oct</p>
            </div>

            <div class="d-flex justify-content-center pt-3">
                <h3 id="mentHeading">National Gala Round</h3>
            </div>

            <div class="d-flex justify-content-center text-center" id="gala">
                <p>To be Announced</p>
            </div>

        </div>
    </section>

    <!-- Phases end -->





    <!-- Rules & guidelines start -->
    <section id="ruleS">
        <div id="rulesNguides">
            <h1 id="rulesHeading" class="pt-5 ms-5">Rules and Guidelines</h1>

            <div class="Parent d-flex pt-3">
                <div class="child1" id="eligi">
                    <img id="rulesCon" src="{{ asset('assets/user/Icons/Eligibility-01.png') }}">
                    <p id="rulesHead">Eligibility</p>
                </div>

                <div class="child2 fs-5">

                        <ul id="rules">
                            <li>&#8226 The “National Hackathon 2022” is open to all Bangladeshi citizens 
                                irrespective of age, gender, religion, educational background.</li>
                            <li>&#8226 Participants are required to work in teams consisting of a minimum of 2 to a 
                                maximum of 4 members.</li>
                            <li>&#8226 Participants must make their own travel and accommodation arrangements and cover all associated costs and expenses during the regional rounds. 
                            <li>&#8226 Travel incentives will be provided for few teams hailing from outside of the host district. (Application of incentive has to be submitted during registration).</li>
                            <li>&#8226 All team members must be able to be present in the venue of the selected zone for 
                                the regional round.</li>
                        </ul>


                </div>
            </div>



            <div class="d-flex justify-content-center">
                <hr id="horiRed" style="width:20%", size="4"  >
            </div>



            <div class="Parent d-flex pt-3">
                <div class="child2 fs-5">

                        <ul  id="rules2">
                            <li>&#8226 One team can include 2 to 4 members.</li>
                            <li>&#8226 Team members can be from any background/educational institution/organization of any age, gender or religion.</li>
                            <li>&#8226 Registered teams must include correct information about their team on the provided 
                                form.</li>
                            <li>&#8226 The registration is completely free of cost.</li>
                            <li>&#8226 By registering in the “National Hackathon 2022” administered by bdapps, 
                                the participant agrees to be bound by the terms and conditions stated in these Rules
                                and Guidelines of the event.</li>
                        </ul>

                </div>

                <div class="child1 fs-5" id="regi">
                    <img id="rulesCon" src="{{ asset('assets/user/Icons/Online Registration-02.png') }}">
                    <p id="rulesHead">Registration</p>

                </div>
            </div>

            <div><p id="round">Round Details</p></div>

            
            <div class="Parent d-flex pt-3">
                <div class="child1" id="regiRound">
                    <img id="rulesCon" src="{{ asset('assets/user/Icons/Regional Round-02.png') }}">
                    <p id="rulesHead">Regional Round</p>
                </div>

                <div class="child2 fs-5">

                        <ul id="rules">
                            <li>&#8226 Teams can participate with an idea/prototype/MVP/Complete App.</li>
                            <li>&#8226 The app can be of any genre including and not limited to – Games, Lifestyle, Education, 
                                AR/VR, Business, Communication, Entertainment, Medical, Utility etc.</li>
                            <li>&#8226 Teams have to give a presentation In front of the judges about their product. 
                                Judging criteria includes – feasibility, originality, Potential User Base,
                                Quality of planning.
                        </ul>
                </div>
            </div>



            <div class="d-flex justify-content-center">
                <hr id="horiRed" style="width:20%", size="4"  >
            </div>



            <div class="Parent d-flex pt-3">
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

                <div class="child1 fs-5" id="onlRound">
                    <img id="rulesCon" src="{{ asset('assets/user/Icons/Online Round-02.png') }}">
                    <p id="rulesHead">Online Round</p>

                </div>
            </div>


            <div class="d-flex justify-content-center">
                <hr id="horiRed" style="width:20%", size="4"  >
            </div>


            <div class="Parent d-flex pt-3">
                <div class="child1" id="natRound">
                    <img id="rulesCon" src="{{ asset('assets/user/Icons/National Round-02.png') }}">
                    <p id="rulesHead">National Round</p>
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
                <div class="child2 fs-5">

                        <ul  id="rules2">
                            <li>&#8226 The intellectual property of your idea and code belongs to you.</li>
                            <li>&#8226 Winners prize money will be divided into milestones based trances.</li>
                            <li>&#8226 bdapps reserves the right to change any provisions and regulations of the platform 
                                without prior notification.</li>
                        </ul>

                </div>

                <div class="child1 fs-5" id="misce">
                    <img id="rulesCon" src="{{ asset('assets/user/Icons/Miscellaneous-01.png') }}">
                    <p id="rulesHead">Miscellaneous</p>
                </div>

            </div>
        </div>


        <div id="rulesNguidesResponsive">
            <h1 id="rulesHeading" class="pt-5 ms-5">Rules and Guidelines</h1>

            <div class="Parent d-flex pt-3">
                <div class="child1" id="eligi">
                    <img src="{{ asset('assets/user/Icons/Eligibility-res.png') }}">
                    <h5 id="rulesHead">Eligibility</h5>
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
                    <img src="{{ asset('assets/user/Icons/Online Registration-res.png') }}">
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
                    <img src="{{ asset('assets/user/Icons/Regional Round-res.png') }}">
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
                    <img src="{{ asset('assets/user/Icons/Online Round-res.png') }}">
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
                    <img src="{{ asset('assets/user/Icons/National Round-res.png') }}">
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
                    <img src="{{ asset('assets/user/Icons/Miscellaneous-res.png') }}">
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
        $('#myModal').modal('show');
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