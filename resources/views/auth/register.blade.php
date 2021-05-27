@include('layout.nav')
<section id="register">
<div class="container">
    <div class="row justify-content-center">
        <div class="card card-login justify-content-center ">
            <div class="card-header text-center ">
                <h1>Registrasi Akun</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-sm-9">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="email" class="col-sm-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-sm-9">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-sm-9">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password-confirm" class="col-sm-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-sm-9">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label for="usia" class="col-sm-3 col-form-label text-left">Usia</label>
                        <div class="col-sm-5">
                            <input class="form-control  @error('usia') is-invalid @enderror" value="{{ old('usia') }}" type="number" width="60px" name="usia" id="usia" class="form-control" value="{{ old('usia') }}" autocomplete="usia" autofocus>
                            @error('usia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label class=" col-form-label">tahun</label>
                        </div>    
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label text-md-right">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                    id="flexRadioDefault1" value="Laki-laki" checked> Laki-laki
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                    id="flexRadioDefault2" value="Perempuan"> Perempuan
                            </div>
                        </div>
                        @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label text-md-right">Nomor Handphone</label>
                        <div class="col-sm-9">
                            <input type="number" name="nomor_handphone" class="form-control @error('nomor_handphone') is-invalid @enderror" value="{{ old('nomor_handphone') }}" autocomplete="nomor_handphone" autofocus>
                            @error('nomor_handphone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label text-md-right">Alamat</label>
                        <div class="col-sm-9">
                        <div class="form-floating">
                            <textarea class="form-control @error('alamat') is-invalid @enderror"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat" value="{{ old('alamat') }}" autocomplete="alamat" autofocus></textarea>
                            <label for="floatingTextarea2">Alamat</label>
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         </div>
                        </div>
                       
                    </div>
            </div>
        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <button type="button" class="btn btn-danger" onclick="window.location.href='/login'"
                class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> {{ __('Register') }}</button>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</section>
@include('layout.footer')