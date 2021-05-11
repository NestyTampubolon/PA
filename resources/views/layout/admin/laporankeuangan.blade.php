@include('layout.admin.navadmin')
			<!-- Section 1 -->
			<div class="tabel1" id="section-2">
					<div class="container-fluid">
						<div class="card mb-4">
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								Laporan Keuangan
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No Laporan Keuangan</th>
												<th>Tanggal Laporan</th>
												<th>Pemasukan</th>
												<th>Pengeluaran</th>
												<th>Keuntungan</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										
										@foreach($totaljoin as $totaljoin)
											<tr>
												<td>{{$totaljoin->id_laporan}}</td>
												<td>{{$totaljoin->tanggal_laporan}}</td>
												<td>@currency($totaljoin->harga)</td>
												<td><form action="{{route('laporankeuangan.update',$totaljoin->id_laporan)}}" method="post" enctype="multipart/form-data">
																{{ csrf_field() }}
																<div class=" row">
																<input type="hidden" name="pemasukan" value="{{$totaljoin->harga}}">
															<div class="col">
																	<input type="text" required="required" name="pengeluaran" class="form-control " id="dengan-rupiah" type-currency="IDR" value="{{$totaljoin->pengeluaran}}">
															</div>
														</div></td>
															<td>
															<input type="hidden" name="keuntungan" value="{{$totaljoin->harga - $totaljoin->pengeluaran}}">
															@currency($totaljoin->harga - $totaljoin->pengeluaran)</td>
															<td><button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Simpan</button>
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