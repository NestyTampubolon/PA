@include('layout.karyawan.navkaryawan')
<style>
input,textarea{
    margin:10px;
}
</style>
<div class="edit">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card border-warning">
                    <div class="card-header">Detail Pengiriman</div>
                    <div class="card-body">
                    @foreach($pemesanan as $pemesanans)
                        <div class="mb-6 row">
                            <label for="name" class="col-sm-4 col-form-label">Nama Pengirim</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control" id="name"
                                    value="{{$pemesanans->name}}">
                            </div>
                        </div>
                        <div class="mb-6 row">
                            <label for="nama_penerima" class="col-sm-4 col-form-label">No. Handphone Pengirim</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control" id="nama_penerima"
                                    value="{{$pemesanans->nomor_handphone}}">
                            </div>
                        </div>
                        <div class="mb-6 row">
                            <label for="nama_penerima" class="col-sm-4 col-form-label">Nama Penerima</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control" id="nama_penerima"
                                    value="{{$pemesanans->nama_penerima}}">
                            </div>
                        </div>
                        <div class="mb-6 row">
                            <label for="nama_penerima" class="col-sm-4 col-form-label">Alamat Penerima</label>
                            <div class="col-sm-8">
                            <div class="form-floating">
                                <textarea class="form-control" readonly placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{$pemesanans->alamat_penerima}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6 row">
                            <label for="nama_penerima" class="col-sm-4 col-form-label">Total Harga</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control" id="nama_penerima"
                                    value="@currency($pemesanans->total_harga)">
                            </div>
                        </div>
                        <div class="mb-6 row">
                            <label for="nama_penerima" class="col-sm-4 col-form-label">Metode Pembayaran</label>
                            <div class="col-sm-8">
                                <input type="text" readonly class="form-control" id="nama_penerima"
                                    value="{{$pemesanans->metode_pembayaran}}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <h1>Detail Pemesanan </h1>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kuantitas</th>
                                        <th>Total Harga</th>
                                    </tr>
                                    <?php $nomor = 1;?>
                                </thead>
                                <tbody>
                                    @foreach($daftarjoin as $daftarjoin)
                                    <tr>
                                        <td>
                                            <?php echo $nomor++; ?>
                                        </td>
                                        <td>{{$daftarjoin->nama}}</td>
                                        <td>{{$daftarjoin->kuantitas}}</td>
                                        <td>@currency($daftarjoin->jumlah_harga)</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary"
                                onclick="window.location.href='/daftarpemesanan'"><i class="fas fa-arrow-left"></i>
                                Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include('layout.karyawan.footerkaryawan')