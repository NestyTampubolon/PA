@include('layout.nav')

<div class="container">

    <!-- ======= Menu Section ======= -->
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        </div>
             
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <!-- card customer -->
    
    
          <div class="row justify-content-center  menu-item filter-Customer">
            <div class="card card-login justify-content-center ">
            <div class="card-header text-center "> <h1>Login</h1> </div>
    
        <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="mb-3 row justify-content-center">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-sm-8">
                        <input  id="email" type="email" required="required" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <div class="col-sm-8">
                        <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer text-center">
                 <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a></div>
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

@include('layout.footer')