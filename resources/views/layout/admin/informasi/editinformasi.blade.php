@include('layout.admin.navadmin')

<div class="edit">
    <div class="card">
    <h1>Edit Informasi</h1>
        <div class="card-body">

            <form action="{{route('informasi.update',$informasi->id_informasi)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

                <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                        <div class="form-floating">
                        <input type="hidden" name="id_informasi" value="{{$informasi->id_informasi}}">
                            <textarea class="form-control"  id="floatingTextarea2" style="height: 100px" name="deskripsi" value="{{$informasi->deskripsi}}">{{$informasi->deskripsi}}</textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
                         </div>
                        </div>
                    </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-9">
                        <input class="form-control" id="formFileMultiple"  name="gambar" type="file" accept="jpg" id="formFileMultiple" multiple value="{{$informasi->gambar}}" >{{$informasi->gambar}}
                    </div>
                </div>
              
				<button type="button" class="btn btn-danger" onclick="window.location.href='/informasi'"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Edit</button>
            </form>
            

        </div>
    </div>
</div>


@include('layout.admin.footeradmin')