@include('layout.nav')

<section id="form-email">
<div class="container"  data-aos="fade-up">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-email justify-content-center">
                <div class="card-header text-center"><h1>{{ __('Reset Password') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-center">{{ __('E-Mail') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit"  class="btn btn-primary">
                                    {{ __('Kirim') }}
                                </button>
                                <button type="button"  class="btn btn-danger">
                                   <a href="{{ route('login') }}" style="color:white"> {{ __('Kembali') }} </a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@include('layout.footer')

