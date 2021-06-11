@include('layout.admin.navadmin')
<style>
    .row{
        margin-bottom:10px;
    }
</style>
<!-- Section 1 -->
<div class="tabel1" id="section-2">
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Daftar Menu
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr><?php $nomor = 1;?>
                        </thead>
                        <tbody>
                            @foreach($produks as $produk)
                            <tr>
                            
                                <td><?php echo $nomor++; ?></td>
                                <td>{{$produk->nama}}</td>
                                <td>@currency($produk->harga)</td>
                                <td><img src="{{url('gambarmenu/'.$produk->gambar)}}" width="80px" height="80px" alt="" data-bs-toggle="modal" data-bs-target="#myModals{{$produk->id_produk}}"></td>
                                <td>{{$produk->kategori}}</td>
                                <td>{{$produk->stok}}</td>
                                <td><button type="button"  class="btn btn-primary"  onclick="window.location.href='edit/{{$produk->id_produk}}'"><i class="fas fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal{{$produk->id_produk}}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button> 
                                </td>
                            </tr>

                                    <!-- Modal Gambar -->
                                    <div id="myModals{{$produk->id_produk}}" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="{{url('gambarmenu/'.$produk->gambar)}}"  class="img-fluid" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal{{$produk->id_produk}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class=" ml-auto modal-title" id="exampleModalLabel">Hapus Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-3">Nama</div>
                                                <div class="col-sm-9 text-left"><input type="text" class="form-control"  readonly value="{{$produk->nama}}"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">Harga</div>
                                                <div class="col-sm-9 text-left"><input type="text" class="form-control"  readonly value="@currency($produk->harga)"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">Gambar</div>
                                                <div class="col-sm-9 text-left"><img src="{{url('gambarmenu/'.$produk->gambar)}}" width="80px" height="80px" alt="" border="1px" data-bs-toggle="modal" data-bs-target="#myModals{{$produk->id_produk}}"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-danger" onclick="window.location.href='/daftarmenu/delete/{{$produk->id_produk}}'" >Hapus</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-info" onclick="window.location.href='tambahmenu'"><i class="fas fa-plus"></i> Tambah Menu</button>


@include('layout.admin.footeradmin')