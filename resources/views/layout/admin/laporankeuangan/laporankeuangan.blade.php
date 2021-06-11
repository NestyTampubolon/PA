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
												<td>@currency($totaljoin->pengeluaran)</td>
												<td>@currency($totaljoin->keuntungan)</td>
												<td>
												<button type="button" class="btn btn-info" onclick="window.location.href='laporankeuangandetail/{{$totaljoin->id_laporan}}'"><i class="fas fa-check"></i> Detail Pengeluaran</button>
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

@include('layout.admin.footeradmin')