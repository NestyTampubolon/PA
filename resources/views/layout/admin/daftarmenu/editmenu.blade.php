
@include('layout.admin.navadmin')



<div class="edit">
    <div class="card">
    <h1>Edit Menu</h1>
        <div class="card-body">
            <form action="{{route('daftarmenu.update',$editproduks->id_produk)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                    <input type="hidden" name="id_produk" value="{{$editproduks->id_produk}}">
                        <input type="text" required="required" name="nama" class="form-control" value="{{$editproduks->nama}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" name="harga" class="form-control" value="{{$editproduks->harga}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"   name="gambar" type="file" accept="jpg" id="formFileMultiple" multiple value="{{$editproduks->gambar}}" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-9">
                        <select class="form-control"  required="required" name="kategori" aria-label="Default select example" value="{{$editproduks->kategori}}">
                            <option value="{{$editproduks->kategori}}">{{$editproduks->kategori}}</option>
                            <option value="aneka_nasi">Aneka Nasi</option>
                            <option value="aneka_ikan">Aneka Ikan</option>
                            <option value="aneka_seafood">Aneka Seafood</option>
                            <option value="aneka_mie">Aneka Mie</option>
                            <option value="ayam_bebek">Ayam/Bebek</option>
                            <option value="soup">Soup</option>
                            <option value="fasta">Fasta</option>
                            <option value="aneka_juice">Aneka Juice</option>
                            <option value="kopi-susu">Kopi/Susu</option>
                            <option value="bir">Bir</option>
                            <option value="sayur">Sayur</option>
                            <option value="snack">Snack</option>
                            <option value="dessert-salad">Dessert/Salad</option>
                           
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Stok</label>
                    <div class="col-sm-9">
                        <input type="number" required="required" name="stok" class="form-control" value="{{$editproduks->stok}}">
                    </div>
                </div>
				<button type="button" class="btn btn-danger" onclick="window.location.href='/daftarmenu'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Edit</button>
            </form>
            

        </div>
    </div>
</div>


@include('layout.admin.footeradmin')