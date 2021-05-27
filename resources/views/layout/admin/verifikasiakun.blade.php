@include('layout.admin.navadmin')
<style>
.modal-body .row{
margin-bottom:7px;
text-align:left;
}
.title{
    text-align:center;
}

</style>
<!-- Section 1 -->
<div class="tabel2" id="section-2">
    <div class="container-fluid"  width="100%">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Verifikasi Akun
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="title">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Usia</th>
                                <th>No. Handphone</th>
                                <th>Alamat</th>
                                <th>Keterangan</th>
                                <th width="20%">Action</th>
                                <?php $nomor = 1;?>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($customer as $customer)
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->jenis_kelamin}}</td>
                                <td>{{$customer->usia}} tahun</td>
                                <td>{{$customer->nomor_handphone}}</td>
                                <td>{{$customer->alamat}}</td>
                                <td><form action="{{route('verifikasiakun.update',$customer->user_id)}}" method="post" enctype="multipart/form-data">
            										{{ csrf_field() }}
													<div class=" row">
												<div class="col">
													<select class="form-control"  border="0px" required="required" name="keterangan" aria-label="Default select example" value="">
													<option value="{{$customer->keterangan}}">{{$customer->keterangan}}</option>
														<option value="Proses">Proses</option>
														<option value="Verifikasi">Verifikasi</option>

													</select>
												</div>
											</div>
											
											</td>

                                <td>
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                                        Simpan</button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$customer->user_id}}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button> 
                                    </form>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$customer->user_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title ml-auto" id="exampleModalLabel">Hapus Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-4">Nama</div>
                                                <div class="col-sm-8"><input type="text" class="form-control"  readonly value="{{$customer->name}}"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">Email</div>
                                                <div class="col-sm-8"><input type="text" class="form-control"  readonly value="{{$customer->email}}"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">Jenis Kelamin</div>
                                                <div class="col-sm-8"><input type="text" class="form-control"  readonly value="{{$customer->jenis_kelamin}}"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">Usia</div>
                                                <div class="col-sm-4"><input type="text" class="form-control"  readonly value="{{$customer->usia}}"></div>
                                                <div class="col-sm-4">tahun</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">Nomor Handphone</div>
                                                <div class="col-sm-8"><input type="text" class="form-control"  readonly value="{{$customer->nomor_handphone}}"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">Alamat</div>
                                                <div class="col-sm-8"><textarea name="alamat" id="" cols="30" rows="3" class="form-control" readonly >{{$customer->alamat}}</textarea></div>
                                            </div>
                                Anda yakin menghapusnya?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" onclick="window.location.href='/verifikasiakun/delete/{{$customer->user_id}}'" >Hapus</button>
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



@include('layout.admin.footeradmin')