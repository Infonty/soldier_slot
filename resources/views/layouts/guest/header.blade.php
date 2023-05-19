<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

          <a class="navbar-brand text-primary me-md-5 me-0" href="#">
            <h1><span class="text-primary">Pick</span> <span class="text-light">Time</span></h1>
          </a>
          
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="svg-inline--fa fa-bars" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="#df9333" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path></svg>
          </button>

          <div class="collapse navbar-collapse" style="flex-grow:0;" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item text-md-start text-center mx-2">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>


              <li class="nav-item text-md-start text-center mx-2">
                <a class="nav-link {{ request()->is('register') ? 'active' : '' }} " href="{{route('register')}}">Register</a>
              </li>

              <li class="nav-item dropdown text-center">
                <a href="{{route('login')}}" class="rounded-pill btn btn-outline-primary px-3 fs-5 mx-md-4 mx-0 ">
                    Login
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            </li>
              
            </ul>
    
          </div>
        </div>
      </nav>