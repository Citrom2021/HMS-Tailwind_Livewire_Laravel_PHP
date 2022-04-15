<section>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">

      

        <a href="../index" class="navbar-brand nav-link"></i><i class="fa-solid fa-hotel"></i><span style="margin-left:5%;">Budapest Hotels</span></a>
    

        <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
              </button>
        <div class="collapse navbar-collapse top_nav" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto ">
        <li class="navbar-brand">
          <a href="../index" class="nav-link">Home</a>
        <!--   <hr class="hr_nav"> -->
        </li>
       <li class="navbar-brand"><a href="#services" class="nav-link">Services</a>
        </li>
        <li class="navbar-brand"><a href="#food" class="nav-link">Food</a>
        </li>
        <li class="navbar-brand"><a href="#faq" class="nav-link ">FAQ</a>
        </li>
        <li class="navbar-brand"><a href="#theteam" class="nav-link">Our team</a>
        </li>
        {{-- <li class="navbar-brand"><a href="#contact" class="nav-link">Contact</a> --}}
        </li>
        <li class="navbar-brand"><a href="#gallery" class="nav-link">Gallery</a>
        </li>
        <li class="navbar-brand"><a href="#rooms" class="nav-link">Rooms</a>
        </li>
        <li class="navbar-brand"><a href="#career" class="nav-link">Career</a>
        </li>
        <li class="navbar-brand"><a href="../login" class="nav-link ">Book now</a>
        </li>
        
      </ul>
      <ul class="navbar navbar-nav navbar-right" style="display:flex;">
        <!--<li>
          <button class="btn top_login">
                    Login
                </button>
        </li>
        <li>
          <button class="btn sign_btn">
                    SignUp
                </button>
        </li>-->
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @endauth
                        {{-- <a href="" target="_blank" class="btn btn-primary">Back to Site</a> --}}
                    </div>
                @endif
            </ul>
        </div>
    </div>

    </nav>
</section>

