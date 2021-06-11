@include('layout.admin.navadmin')
<style>
.modal-body input{
	margin:10px;
}
</style>

			<!-- Section 1 -->
			<div class="tabel2" id="section-2" width="50%">
					<div class="container-fluid" >
						<div class="card mb-1">
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								Detail Pengeluaran
							</div>
							<div class="card-body" >
								<div class="table-responsive" >
									<table class="table table-bordered table-hover" id="dataTable"  cellspacing="0">
										<thead>
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Deskripsi</th>
												<th>Pengeluaran</th>
												<th>Action</th>
												<?php $nomor = 1;?>
											</tr>
										</thead>
										<tbody>
										@foreach($detail as $details)
											<tr>
											<form action="{{route('laporankeuangandetail.update',$details->id_laporandetail)}}" method="post" enctype="multipart/form-data">
													{{ csrf_field() }}
												<td><?php echo $nomor++; ?></td>
												<td><input type="text" value="{{$details->tanggal_laporan}}" class="form-control" readonly></td>
												<td><input type="text" value="{{$details->deskripsi}}" name="deskripsi" class="form-control"></td>
												<td><input type="number" value="{{$details->jumlah_pengeluaran}}" name="jumlah_pengeluaran" class="form-control"></td>
												<td><button type="submit"  class="btn btn-primary" ><i class="fas fa-edit"></i>&nbsp Edit</button>
											</form>
                                    			<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal{{$details->id_laporandetail}}"><i class="fas fa-trash-alt"></i>&nbsp Hapus</button> 
												</td>
											</tr>
									
								
											  <!-- Modal Hapus -->
											  <div class="modal fade" id="Modal{{$details->id_laporandetail}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered">
													<div class="modal-content ">
													<div class="modal-header">
														<h5 class=" ml-auto modal-title" id="exampleModalLabel">Hapus Data</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<p>Anda yakin menghapusnya?</p>
														
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
														<button type="button" class="btn btn-danger" onclick="window.location.href='/laporankeuangandetail/delete/{{$details->id_laporandetail}}'" >Hapus</button>
													</div>
													</div>
												</div>
												</div>
												@endforeach
							
													<!-- Modal -->
													<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content ">
														<div class="modal-header">
															<h5 class=" ml-auto modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
														<form action="{{route('laporankeuangandetail.store')}}" method="post" enctype="multipart/form-data">
														{{ csrf_field() }}
															<div class="row">
																<div class="col-sm-3">Deskripsi</div>
																<div class="col-sm-9 text-left"><input type="text" class="form-control" name="deskripsi" value=""></div>
															</div>
															<div class="row">
																<div class="col-sm-3">Harga</div>
																<div class="col-sm-9 text-left"><input type="number" class="form-control" name="harga"  value=""></div>
																<input type="hidden" name="id_laporan" value="{{$laporan->id_laporan}}">
															</div>  
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
															<button type="submit" class="btn btn-danger"  >Tambah</button>
														</div>
														</form>
														</div>
													</div>
													</div>									
										</tbody>
									</table>
											@foreach($total as $totals)	
											<form action="{{route('laporankeuangandetail.updatetotal',$totals->id_laporan)}}" method="post" enctype="multipart/form-data">
											{{ csrf_field() }}
											<input type="hidden" name="pengeluaran" id="" value="{{$totals->total}}">
											@endforeach
											@foreach($totaljoin as $totaljoins)
											<input type="hidden" name="pemasukan" id="" value="{{$totaljoins->hargatotal}}">
											@endforeach
									<button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#Modal"><i class="fas fa-plus"></i> Tambah Pengeluaran</button>
									<button type="submit" class="btn btn-primary" onclick="window.location.href='/laporankeuangan'"><i class="fas fa-arrow-left"></i> Kembali</button>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>


			
@include('layout.admin.footeradmin')