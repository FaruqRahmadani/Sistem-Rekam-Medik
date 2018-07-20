@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Data-User')}}" class="btn btn-oval btn-success" type="button">
            Kembali
          </a>
        </div>
        <hr class="no-margin">
        <div class="panel-body">
          <form class="form-horizontal row-border" action="{{ Route('submitEdit-User', ['Id' => HCrypt::Encrypt($User->id)]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nama" name="nama" required value="{{$User->nama}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Username" name="username" required value="{{$User->username}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input class="form-control" type="password" placeholder="Password" name="password">
                <small>Isi Hanya Jika Ganti Password</small>
              </div>
            </div>
            <div class="form-group">
							<label class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10">
								<input type="file" name="foto" class="form-control" value="{{old('foto')}}" accept="image/*">
                <small>Isi Hanya Jika Ganti Foto</small>
							</div>
						</div>
            <div class="form-group">
							<div class="col-sm-12 text-center">
                <button type="submit" class="btn btn-oval btn-success btn-outline" type="button">
                  Simpan
                </button>
                <button type="reset" class="btn btn-oval btn-warning btn-outline" type="button">
                  Reset
                </button>
							</div>
						</div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
