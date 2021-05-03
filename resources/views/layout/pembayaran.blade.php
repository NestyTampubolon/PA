@include('layout.nav')
<!-- ======= Check out Section ======= -->
<div style="margin:100px">
@if(Session::has('username'))

<div class="row justify-content-center  menu-item filter-Customer">
            <div class="card card-login justify-content-center ">
            <div class="card-header text-center "> <h1>Form Pembayaran</h1> </div>
   
        <div class="card-body">
            <form action="{{route('pembayaran.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-4 row justify-content-center">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <label for="">{{$pesan->namacustomer}}</label>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                       <label for="">{{$pesan->jenis_kelamin}}</label>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-9">
                       <label for="">{{$pesan->nomor_handphone}}</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                       <label for="">{{$pesan->alamat}}</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Total Harga</label>
                    <div class="col-sm-9">
                       <label for="">@currency($pesan->total_harga)</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple" required="required"  name="bukti_pembayaran" type="file" id="formFileMultiple" multiple >
                    </div>
                </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <button type="batal" class="btn btn-danger" onclick="window.location.href='/'" class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Kirim</button>
               
                </div>
				
                
            </form>
            
            </div>

@endif

<div>
<!-- End Contact Section -->
@include('layout.footer')