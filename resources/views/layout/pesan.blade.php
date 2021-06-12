@include('layout.nav')
<div class="container" data-aos="fade-up">
    <div class="section-title">
    </div>
    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <!-- card customer -->
        <div class="row justify-content-center  menu-item filter-Customer">
            <div class="card card-login justify-content-center ">
                <div class="card-header text-center ">
                    <h1>Pesan</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('gambarmenu')}}/{{$produks->gambar}}" alt="" width="150px" height="200px">
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <form action="{{route('pesan.pesanan')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3 row justify-content-center">
                                        <div class="col-md-12 form-group">
                                  
                                            <input type="hidden" name="id_produk" class="form-control"
                                                value="{{$produks->id_produk}}">

                                            
                                            <h3>{{$produks->nama}}</h3>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <h4>@currency($produks->harga)</h4>
                                        <input type="hidden" name="harga" required="required" class="form-control" value="{{$produks->harga}}">
                                    </div>
                                    <div class="mb-3 row">
                                        <h6>tersisa : &nbsp   {{$produks->stok}}</h6>
                                    </div>
                                    <div class="mb-3 row justify-content-center">
                                        <label for="usia" class="col-sm-4 col-form-label text-left">Kuantitas</label>
                                        <div class="col-sm-5">
                                            <input class="form-control"  type="number" required width="60px" name="quantity" max="{{$produks->stok}}" id="quantity" class="form-control"  >
                                        </div>
                                        <div class="col-sm-3">
                                            <label class=" col-form-label"></label>
                                        </div>    
                                    </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button type="button" class="btn btn-danger" onclick="window.location.href='/'"
                                    class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i>
                                    Pesan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                     {{session('success')}}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@include('layout.footer')