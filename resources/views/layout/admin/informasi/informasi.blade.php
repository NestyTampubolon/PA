@include('layout.admin.navadmin')

<!-- Section 1 -->
<div class="tabel1" id="section-2">
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Informasi
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Keterangan About</th>
                                <th>Gambar</th>
                                <th>Action</th>
                                <?php $nomor = 1;?>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($informasi as $informasi)
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td>{{$informasi->deskripsi}}</td>
                                <td><img src="{{url('image/'.$informasi->gambar)}}" width="100px" height="100px" alt="" data-bs-toggle="modal" data-bs-target="#myModals{{$informasi->id_informasi}}"></td>
                                <td>
                                <button type="button"  class="btn btn-primary" onclick="window.location.href='informasi/{{$informasi->id_informasi}}'" ><i class="fas fa-edit"></i>
                                        Edit</button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$informasi->id_informasi}}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button> 
                                    </form>
                                    </div>
                                </td>
                            </tr>


                                    <!-- Modal Gambar -->
                                    <div id="myModals{{$informasi->id_informasi}}" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="{{url('image/'.$informasi->gambar)}}"  class="img-fluid" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <!-- Modal Hapus -->
                          <div class="modal fade" id="exampleModal{{$informasi->id_informasi}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title ml-auto" id="exampleModalLabel">Hapus Data</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                      <div class="row">
                                            <div class="col-sm-4">Deskripsi</div>
                                            <div class="col-sm-8"><textarea name="deskripsi" id="" cols="30" rows="3" class="form-control" readonly >{{$informasi->deskripsi}}</textarea></div>
                                      </div>
                                      <div class="row">
                                                <div class="col-sm-3">Gambar</div>
                                                <div class="col-sm-9 text-left"><img src="{{url('image/'.$informasi->gambar)}}" width="100px" height="100px" alt="" border="1px" data-bs-toggle="modal" data-bs-target="#myModals{{$informasi->id_informasi}}"></div>
                                            </div>
                                Anda yakin menghapusnya?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary" onclick="window.location.href='/informasi/delete/{{$informasi->id_informasi}}'" >Hapus</button>
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

<button type="button" class="btn btn-info" onclick="window.location.href='tambahinformasi'"><i class="fas fa-plus"></i> Tambah Informasi</button>





@include('layout.admin.footeradmin')

