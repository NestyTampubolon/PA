@include('layout.admin.navadmin')

<div class="edit">
    <div class="card">
    <h1>Tambah Informasi</h1>
        <div class="card-body">

            <form action="{{route('informasi.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

                <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                        <div class="form-floating">
                            <textarea class="form-control"  id="floatingTextarea2" style="height: 100px" name="deskripsi" ></textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
                         </div>
                        </div>
                    </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="gambar" type="file" accept="jpg" id="formFileMultiple" multiple >
                    </div>
                </div>
              
				<button type="button" class="btn btn-danger" onclick="window.location.href='/informasi'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambah</button>
            </form>
            

        </div>
    </div>
</div>


@include('layout.admin.footeradmin')