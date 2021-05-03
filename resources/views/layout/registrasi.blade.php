@include('layout.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="card card-login justify-content-center ">
            <div class="card-header text-center ">
                <h1>Registrasi Akun</h1>
            </div>
            <div class="card-body">
                <form action="registrasiakun/store" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" required="required" name="nama" class="form-control" value="">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" required="required" name="username" class="form-control" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" required="required" name="password" class="form-control" value="">
                        </div>
                    </div>
                    <div class="mb-3 row justify-content-center">
                        <label class="col-sm-3 col-form-label">Usia</label>
                        <div class="col-sm-9">
                            <input class="col-sm-6" type="number" width="60px" required="required" name="username" id="flexCheckChecked" class="form-control" value="">
                            <label class="col-sm-3 col-form-label">tahun</label>

                        </div>
                    </div> 
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
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
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-9">
                            <input type="text" required="required" name="nomor_handphone" class="form-control" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                        <div class="form-floating">
                            <textarea class="form-control"  required="required" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat"></textarea>
                            <label for="floatingTextarea2">Alamat</label>
                         </div>
                        </div>
                    </div>
            </div>
        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <button type="button" class="btn btn-danger" onclick="window.location.href='/login'"
                class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Registrasi</button>
        </div>
        </form>
    </div>
</div>
</div>
</div>

@include('layout.footer')