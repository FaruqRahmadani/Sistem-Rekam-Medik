@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Data-Poli')}}" class="btn btn-oval btn-success" type="button">
            Kembali
          </a>
        </div>
        <hr class="no-margin">
        <div class="panel-body">
          <form class="form-horizontal row-border" action="{{ Route('submitEdit-Pasien', ['Id' => HCrypt::Encrypt($Pasien->id)]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="col-sm-2 control-label">No. Rekam Medis</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nomor Rekam Medis" name="no_rm" required value="{{$Pasien->no_rm}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">NIK</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nomor Induk Kependudukan" name="nik" required value="{{$Pasien->nik}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nama" name="nama" required value="{{$Pasien->nama}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-xs-12 control-label">Tempat/Tanggal Lahir</label>
              <div class="col-sm-5 col-xs-5" style="padding-right:2px">
                <input class="form-control" type="text" placeholder="Tempat Lahir" name="tempat_lahir" required value="{{$Pasien->tempat_lahir}}">
              </div>
              <div class="col-sm-5 col-xs-7" style="padding-left:2px">
                <input class="form-control" type="date" placeholder="Tempat Lahir" name="tanggal_lahir" required value="{{$Pasien->tanggal_lahir}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select class="form-control" name="jenis_kelamin" required>
                  <option value="" selected hidden>Jenis Kelamin</option>
                  <option value="1" {{$Pasien->jenis_kelamin == 1 ? 'selected' : ''}}>Laki - Laki</option>
                  <option value="2" {{$Pasien->jenis_kelamin == 2 ? 'selected' : ''}}>Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pekerjaan</label>
              <div class="col-sm-10">
                <select class="form-control" name="pekerjaan" required>
                  <option value="" selected hidden>Pekerjaan</option>
                  <option value="1" {{$Pasien->pekerjaan == 1 ? 'selected' : ''}}>Pegawai Negeri</option>
                  <option value="2" {{$Pasien->pekerjaan == 2 ? 'selected' : ''}}>Polri/TNI</option>
                  <option value="3" {{$Pasien->pekerjaan == 3 ? 'selected' : ''}}>Swasta</option>
                  <option value="4" {{$Pasien->pekerjaan == 4 ? 'selected' : ''}}>Pelajar/Mahasiswa</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Agama</label>
              <div class="col-sm-10">
                <select class="form-control" name="agama" required>
                  <option value="" selected hidden>Agama</option>
                  <option value="1" {{$Pasien->agama == 1 ? 'selected' : ''}}>Islam</option>
                  <option value="2" {{$Pasien->agama == 2 ? 'selected' : ''}}>Katolik</option>
                  <option value="3" {{$Pasien->agama == 3 ? 'selected' : ''}}>Protestan</option>
                  <option value="4" {{$Pasien->agama == 4 ? 'selected' : ''}}>Buddha</option>
                  <option value="5" {{$Pasien->agama == 5 ? 'selected' : ''}}>Hindu</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="2" required>{{$Pasien->alamat}}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nomor Telepon" name="no_telepon" required value="{{$Pasien->no_telepon}}">
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
