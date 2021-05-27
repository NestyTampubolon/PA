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
									<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Pemasukan</th>
												<th>Pengeluaran</th>
												<th>Keuntungan</th>
												<th>Action</th>
												<?php $nomor = 1;?>
											</tr>
										</thead>
										<tbody>
										
										@foreach($totaljoin as $totaljoin)
											<tr>
												<td><?php echo $nomor++; ?></td>
												<td>{{$totaljoin->tanggal_laporan}}</td>
												<td>@currency($totaljoin->hargatotal)</td>
												<td><form action="{{route('laporankeuangan.update',$totaljoin->id_laporan)}}" method="post" enctype="multipart/form-data">
																{{ csrf_field() }}
																<div class=" row">
																<input type="hidden" name="pemasukan" value="{{$totaljoin->hargatotal}}">
															<div class="col">
																	<input type="text" required="required" name="pengeluaran" class="form-control " id="dengan-rupiah" type-currency="IDR" value="{{$totaljoin->pengeluaran}}">
															</div>
														</div></td>
															<td>
															<input type="hidden" name="keuntungan" value="{{$totaljoin->hargatotal - $totaljoin->pengeluaran}}">
															@currency($totaljoin->hargatotal - $totaljoin->pengeluaran)</td>
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