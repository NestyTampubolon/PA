@include('layout.nav')
<!-- ======= Check out Section ======= -->
<div style="margin:100px">


<div class="row justify-content-center  menu-item filter-Customer">
            <div class="card card-login justify-content-center ">
            <div class="card-header text-center "> <h1>Form Pembayaran</h1> </div>
   
        <div class="card-body">
                <div class="mb-4 row justify-content-center">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <label for="">{{$pembayaran->namacustomer}}</label>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                       <label for="">{{$pembayaran->jenis_kelamin}}</label>
                    </div>
                </div>
                <div class="mb-4 row">
                    <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-9">
                       <label for="">{{$pembayaran->nomor_handphone}}</label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                       <label for="">{{$pembayaran->alamat}}</label>
                    </div>
                </div>
                <form action="{{route('checkout.storepemesanan')}}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                @foreach($total as $totals)
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Total Harga</label>
                    <div class="col-sm-9">
                       <label for="">@currency($totals->total)</label>
                       <input type="hidden" name="total_harga" value="{{$totals->total}}">
                    </div>
                </div>
                @endforeach
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple" required="required"  name="bukti_pembayaran" type="file" id="formFileMultiple" multiple >
                    </div>
                </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
               
                </div>
				
                
            
            </div>


<div class="card card-login justify-content-center ">
<div class="card-header text-center">
<h3>Daftar Pesanan</h3>
</div>
        <div class="card-body">
    
            @foreach($pesan as $pesan)
                <div class="mb-3 row ">
                    <div class="col-sm-9">
                    <input type="hidden" required="required" name="id_produk" class="form-control" value="{{$pesan->id_produk}}">
                        <h6>Nama : {{$pesan->nama}} </h6>
                        <input type="hidden" required="required" name="nama" class="form-control" value="">
                    </div>
                    <div class="col-sm-9">
                        <h6>Kuantitas : {{$pesan->quantity}}</h6>
                        <input type="hidden" required="required" name="quantity" class="form-control" value="{{$pesan->quantity}}">
                    </div>
                    <div class="col-sm-9">
                        <h6>Total : @currency($pesan->quantity * $pesan->harga)</h6>
                        <input type="hidden" required="required" name="total" class="form-control" value="{{$pesan->total}}">
                    </div>
                </div>
                @endforeach
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <button type="button" class="btn btn-danger" onclick="window.location.href='/'" class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Checkout</button>
               
                </div>
            </form>
            
            </div>
        </div>

      
<!-- End Contact Section -->
@include('layout.footer')