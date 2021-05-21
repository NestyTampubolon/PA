@include('layout.admin.navadmin')

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
                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr><?php $nomor = 1;?>
                        </thead>
                        <tbody>
                            @foreach($produks as $produk)
                            <tr>
                            
                                <td><?php echo $nomor++; ?></td>
                                <td>{{$produk->nama}}</td>
                                <td>@currency($produk->harga)</td>
                                <td><img src="{{url('gambarmenu/'.$produk->gambar)}}" width="80px" height="80px" alt="" data-bs-toggle="modal" data-bs-target="#myModals{{$produk->id_produk}}">
                                <!-- {{$produk->gambar}} -->
                                <div id="myModals{{$produk->id_produk}}" class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{url('gambarmenu/'.$produk->gambar)}}"  class="img-fluid" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                                <td>{{$produk->kategori}}</td>
                                <td><button type="button"  class="btn btn-primary"  onclick="window.location.href='edit/{{$produk->id_produk}}'"><i class="fas fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash-alt"></i>
                                        Hapus</button> 
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-info" onclick="window.location.href='tambahmenu'"><i class="fas fa-plus"></i> Tambah Menu</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Anda yakin menghapusnya?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='/daftarmenu/delete/{{$produk->id_produk}}'" >Hapus</button>
      </div>
    </div>
  </div>
</div>




@include('layout.admin.footeradmin')