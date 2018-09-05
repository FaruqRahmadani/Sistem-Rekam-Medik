@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-green panel-demo">
        <div class="panel-heading panel-heading-collapsed">Data Pasien <b>{{$Pasien->nama}}</b>
          <a class="pull-right" href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel">
            <em class="fa fa-plus"></em>
          </a>
        </div>
        <div class="panel-wrapper collapse">
          <div class="panel-body">
            <table class="table table-hover">
              <tr>
                <td>Nomor Rekam Medis</td>
                <td>{{$Pasien->no_rm}}</td>
              </tr>
              <tr>
                <td>NIK</td>
                <td>{{$Pasien->nik}}</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>{{$Pasien->nama}}</td>
              </tr>
              <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>{{$Pasien->tempat_lahir}}, {{HTanggal::Format($Pasien->tanggal_lahir)}} ({{$Pasien->Umur}} Tahun)</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>{{$Pasien->JenisKelaminText}}</td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>{{$Pasien->PekerjaanText}}</td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>{{$Pasien->AgamaText}}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>{!!nl2br($Pasien->alamat)!!}</td>
              </tr>
              <tr>
                <td>Nomor Telepon</td>
                <td>{{$Pasien->no_telepon}}</td>
              </tr>
          </table>
          </div>
        </div>
      </div>
      <div class="panel panel-green" id="panelDemo9">
        <div class="panel-heading">Data Kunjungan Pasien</div>
        <div class="panel-body">
          <form class="form-horizontal row-border" action="{{ Route('submitEdit-Kunjungan', ['Id' => HCrypt::Encrypt($Kunjungan->id)]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="col-sm-2 control-label">Poli Tujuan</label>
              <div class="col-sm-10">
                <select class="form-control" name="poli_id" required>
                  <option value="" selected hidden>Poli Tujuan</option>
                  @foreach ($Poli as $DataPoli)
                    <option value="{{$DataPoli->id}}" {{$Kunjungan->poli_id == $DataPoli->id ? 'selected' : ''}}>{{$DataPoli->nama}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Keluhan</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="keluhan" rows="2" required>{{$Kunjungan->keluhan}}</textarea>
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
