@include('layout.nav')
<section id="login">
<div class="container">

    <!-- ======= Menu Section ======= -->
      <div class="container" data-aos="fade-up">
      @if(session('error'))
          <div class="dropdown">
              <a class="dropdown">
              <div class="alert alert-warning d-flex align-items-center" role="alert">
            <div>
              Hallo,{{session('error')}}
            </div>
            
          </div>
              </a>                   
            </div>
    @endif
        <div class="section-title">
        </div>
             
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <!-- card customer -->
    
    
          <div class="row justify-content-center  menu-item filter-Customer">
            <div class="card card-login justify-content-center ">
            <div class="card-header text-center "> <h1>Login</h1> </div>
    
        <div class="card-body ">
        <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="mb-3 row justify-content-center">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                        <input type="email"  id="email" required="required" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                        <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class=""> <center>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </center>
                             
                            </div>
                        </div>
                        <div class="card-footer text-center">
                 <div >
                 @if (Route::has('password.request'))
                                    <a class="btn btn-link link-dark" style="text-decoration:none" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                            </a>
                    @endif
                 <a href="{{ route('register') }}" class="btn btn-link link-primary"  style="text-decoration:none" >Need an account? Sign up!</a></div>
                 </div>
                </form>
                @if(session('login'))
                <div class="dropdown">
                    <a class="dropdown">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
             {{session('login')}}
            </div>
          </div>
              </a>                   
            </div>
             @endif
           
            
            </div>
        </div>
    
        </div>
      </div>
</section>
@include('layout.footer')