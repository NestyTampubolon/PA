@include('layout.karyawan.navkaryawan')
			<!-- Section 1 -->
			<div class="tabel1">
					<div class="container-fluid">
						<div class="card mb-4">
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								Daftar Pemesanan
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Nomor</th>
												<th>Tanggal</th>
												<th>Total Harga</th>
												<th>Keterangan</th>
												<th>Nama Penerima</th>
												<th>Bukti Pembayaran</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($joinpemesanan as $joinpemesanans)
										<tr>
											<td>{{$joinpemesanans->id_pemesanan}}</td>
											<td>{{$joinpemesanans->tanggal_pemesanan}}</td>
											<td>@currency($joinpemesanans->total_harga)</td>
											<td><form action="{{route('daftarpemesanan.update',$joinpemesanans->id_pemesanan)}}" method="post" enctype="multipart/form-data">
            										{{ csrf_field() }}
													<div class=" row">
												<div class="col">
													<select class="form-control"  border="0px" required="required" name="keterangan" aria-label="Default select example" value="{{$joinpemesanans->keterangan}}">
													<option value="{{$joinpemesanans->keterangan}}">{{$joinpemesanans->keterangan}}</option>
														<option value="Verifikasi">Verifikasi</option>
														<option value="Proses">Proses</option>
														<option value="Antar">Antar</option>
														<option value="Selesai">Selesai</option>
													</select>
												</div>
											</div>
											
											</td>
											<td>{{$joinpemesanans->nama_penerima}}</td>
											<td><img src="{{url('bukti_pembayaran/'.$joinpemesanans->bukti_pembayaran)}}" width="80px" height="80px" alt="" data-bs-toggle="modal" data-bs-target="#myModal{{$joinpemesanans->id_pemesanan}}">
											<td width="200px"><button type="button"  class="btn btn-warning" onclick="window.location.href='pemesanandetail/{{$joinpemesanans->id_pemesanan}}'"><i class="fas fa-info-circle"  ></i>
                                        Detail</button>
										<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Simpan</button>
										</form></td>

												<div id="myModal{{$joinpemesanans->id_pemesanan}}" class="modal fade" tabindex="-1" role="dialog">
														<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-body">
																<img src="{{url('bukti_pembayaran/'.$joinpemesanans->bukti_pembayaran)}}"  class="img-fluid" >
															</div>
														</div>
														</div>
													</div>
											</tr>
											<!-- Modal -->
												<div class="modal fade modal-foto" id="myModal{{$joinpemesanans->id_pemesanan}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
													<img src="{{url('bukti_pembayaran/'.$joinpemesanans->bukti_pembayaran)}}"  class="img-fluid" width="50%" height="50%">
													</div>
													<div class="modal-footer">
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



@include('layout.karyawan.footerkaryawan')