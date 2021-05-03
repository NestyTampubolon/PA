@include('layout.admin.navadmin')
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
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Nomor Pemesanan</th>
												<th>Tanggal Pemesanan</th>
												<th>Total Harga</th>
												<th>Keterangan</th>
												<th>Customer</th>
												<th>Bukti Pembayaran</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($joinpemesanan as $joinpemesanan)
										<tr>
											<td>{{$joinpemesanan->id_pemesanan}}</td>
											<td>{{$joinpemesanan->tanggal_pemesanan}}</td>
											<td>@currency($joinpemesanan->total_harga)</td>
											<td><form action="{{route('daftarpemesanan.update',$joinpemesanan->id_pemesanan)}}" method="post" enctype="multipart/form-data">
            										{{ csrf_field() }}
													<div class=" row">
												<div class="col">
													<select class="form-control"  border="0px" required="required" name="keterangan" aria-label="Default select example" value="{{$joinpemesanan->keterangan}}">
													<option value="{{$joinpemesanan->keterangan}}">{{$joinpemesanan->keterangan}}</option>
														<option value="Verifikasi">Verifikasi</option>
														<option value="Proses">Proses</option>
														<option value="Antar">Antar</option>
														<option value="Selesai">Selesai</option>
													</select>
												</div>
											</div>
											
											</td>
											<td>{{$joinpemesanan->nama}}</td>
											<td><img src="" alt=""></td>

											<td width="200px"><button type="button"  class="btn btn-warning" onclick="window.location.href='pemesanandetail/{{$joinpemesanan->id_pemesanan}}'"><i class="fas fa-info-circle"  ></i>
                                        Detail</button>
										<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Simpan</button>
										</form></td>
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>


@include('layout.admin.footeradmin')