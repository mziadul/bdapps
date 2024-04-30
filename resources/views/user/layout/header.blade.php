    <!-- Navbar start-->
    <div>
        <nav class="navbar navbar-dark navbar-expand-md fixed-top">
            <div class="container">
                    <button data-bs-toggle="collapse" class="navbar-toggler align-items-end" data-bs-target="#navcol-1">
                        <span class="navbar-toggler-icon d-sm-flex"></span>
                    </button>
    
                    <a href="{{route('user.home')}}">
                        <img id="logo" src="{{ asset('assets/user/logo/bdapps_android_academy_logo.png') }}">
                    </a>
                    <div class="collapse navbar-collapse text-white" id="navcol-1">
                        <ul class="navbar-nav " >
                            <li class="nav-item" id="navItem"><a class="nav-link {{ isset($tabIndex) && $tabIndex == 1 ? 'active':'' }}" href="{{route('user.home', ['tab' => 1] )}}#supportedBy">Overview</a></li>
    
                            <li class="nav-item" id="navItem"><a class="nav-link {{ isset($tabIndex) && $tabIndex == 2 ? 'active':'' }}" href="{{route('user.home', ['tab' => 2] )}}#prizeMoney">Prizes and benefits</a></li>
    
                            <li class="nav-item" id="navItem"><a class="nav-link {{ isset($tabIndex) && $tabIndex == 3 ? 'active':'' }}" href="{{route('user.home', ['tab' => 3] )}}#phases">Timeline</a></li>
    
                            <li class="nav-item" id="navItem"><a class="nav-link {{ isset($tabIndex) && $tabIndex == 4 ? 'active':'' }}" href="{{route('user.home', ['tab' => 4] )}}#ruleS">Rules and guidelines</a></li>
    
                            <li class="nav-item" id="navItem"><a class="nav-link {{ isset($tabIndex) && $tabIndex == 4 ? 'active':'' }}" href="{{route('user.home', ['tab' => 4] )}}#aboutOfBdappsSection">About bdapps</a></li>
    
    
                            <a class="btn btn-light fw-bold" id="navregbtn" type="button" href="{{route('user.registration')}}">Register Now</a>
                        </ul>
                </div>



            </div>
        </nav>
    </div>
    <!-- Navbar end-->