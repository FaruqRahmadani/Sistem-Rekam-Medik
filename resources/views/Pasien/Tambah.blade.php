@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Data-Pasien')}}" class="btn btn-oval btn-success" type="button">
            Kembali
          </a>
        </div>
        <hr class="no-margin">
        <div class="panel-body">
          <form class="form-horizontal row-border" action="{{ Route('submitTambah-Pasien') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="col-sm-2 control-label">No. Rekam Medik</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nomor Rekam Medik" name="no_rm" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">NIK</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nomor Induk Kependudukan" name="nik" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nama" name="nama" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-xs-12 control-label">Tempat/Tanggal Lahir</label>
              <div class="col-sm-5 col-xs-5" style="padding-right:2px">
                <input class="form-control" type="text" placeholder="Tempat Lahir" name="tempat_lahir" required>
              </div>
              <div class="col-sm-5 col-xs-7" style="padding-left:2px">
                <input class="form-control" type="date" placeholder="Tempat Lahir" name="tanggal_lahir" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select class="form-control" name="jenis_kelamin" required>
                  <option value="" selected hidden>Jenis Kelamin</option>
                  <option value="1">Laki - Laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pekerjaan</label>
              <div class="col-sm-10">
                <select class="form-control" name="pekerjaan" required>
                  <option value="" selected hidden>Pekerjaan</option>
                  <option value="1">Pegawai Negeri</option>
                  <option value="2">Polri/TNI</option>
                  <option value="3">Swasta</option>
                  <option value="4">Pelajar/Mahasiswa</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Agama</label>
              <div class="col-sm-10">
                <select class="form-control" name="agama" required>
                  <option value="" selected hidden>Agama</option>
                  <option value="1">Islam</option>
                  <option value="2">Katolik</option>
                  <option value="3">Protestan</option>
                  <option value="4">Buddha</option>
                  <option value="5">Hindu</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="2" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Nomor Telepon" name="no_telepon" required>
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
