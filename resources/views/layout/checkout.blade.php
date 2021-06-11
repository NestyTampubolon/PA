@include('layout.nav')
<!-- ======= Check out Section ======= -->
<div style="margin-top:50px">
<div class="container">

  <div class="row">
    <div class="col-7">

    <div class="justify-content-center  menu-item filter-Customer">
                    <div class="card card-checkout justify-content-center ">
                        <div class="card-header text-center ">
                            <h1>Checkout</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-4 row justify-content-center">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <label for="">{{$pembayaran->name}}</label>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                                <div class="col-sm-9">
                                    <label for="">{{$pembayaran->nomor_handphone}}</label>
                                </div>
                            </div>
                            <form action="{{route('checkout.storepemesanan')}}" method="post"
                                enctype="multipart/form-data">
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
                                    <label class="col-sm-3 col-form-label">Nama Penerima</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" id="formFileMultiple" required="required"
                                            name="nama_penerima" type="text" id="formFileMultiple" multiple>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Alamat Penerima</label>
                                    <div class="col-sm-9">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea2" style="height: 100px"
                                                name="alamat_penerima"></textarea>
                                            <label for="floatingTextarea2">Alamat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Metode Pembayaran</label>
                                    <div class="col-sm-9">
                                        <div class="form-floating">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="metode_pembayaran"
                                                    value="COD (Bayar di tempat)" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2" >
                                                    COD (Bayar di tempat)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"  name="metode_pembayaran"
                                                    id="flexRadioDisabled" disabled>
                                                <label class="form-check-label" for="flexRadioDisabled">
                                                    Transfer Bank
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        </div>
                    </div>
                </div>
    </div>
    <div class="col-5">

    <div class="card card-checkout justify-content-center ">
                        <div class="card-header text-center">
                            <h3>Daftar Pesanan</h3>
                        </div>
                        <div class="card-body">
                            @foreach($pesan as $pesan)
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="mb-3">
                                            <div class="col-sm-9">
                                                <input type="hidden" required="required" name="id_produk"
                                                    class="form-control" value="{{$pesan->id_produk}}">
                                                <h6>Nama : {{$pesan->nama}} </h6>
                                                <input type="hidden" required="required" name="nama"
                                                    class="form-control" value="">
                                            </div>
                                            <div class="col-sm-9">
                                                <h6>Kuantitas : {{$pesan->quantity}}</h6>
                                                <input type="hidden" required="required" name="quantity"
                                                    class="form-control" value="{{$pesan->quantity}}">
                                            </div>
                                            <div class="col-sm-9">
                                                <h6>Total : @currency($pesan->quantity * $pesan->harga)</h6>
                                                <input type="hidden" required="required" name="total"
                                                    class="form-control" value="{{$pesan->total}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-danger  bottom-50 end-50"
                                            onclick="window.location.href='/checkout/delete/{{$pesan->id_keranjang}}'">Hapus</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="button" class="btn btn-danger" onclick="window.location.href='/'"
                                class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Checkout</button>
                        </div>
                        </form>
                    </div>
    </div>
  </div>
</div>
         
                   
                </div>
            </div>
        </div>
    



<!-- End Contact Section -->
@include('layout.footer')