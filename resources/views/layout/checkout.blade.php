@include('layout.nav')
<!-- ======= Check out Section ======= -->
<div style="margin:100px">
@if(Session::has('username'))


<div class="card card-login justify-content-center ">
        <div class="card-body">
            <form action="{{route('checkout.storepemesanan')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
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

      
@endif

<!-- End Contact Section -->
@include('layout.footer')