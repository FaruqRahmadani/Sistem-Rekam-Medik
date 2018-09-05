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
          <a href="{{Route('Tambah-Kunjungan', ['Id' => HCrypt::Encrypt($Pasien->id)])}}" class="btn btn-oval btn-success" type="button">
            Tambah
          </a>
          <hr>
          <table class="table table-striped table-hover" id="datatable2">
            <thead>
              <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Poli Tujuan</th>
                <th>Keluhan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($Kunjungan as $Index=>$DataKunjungan)
                <tr>
                  <td>{{$Index+1}}</td>
                  <td>{{HTanggal::Format($DataKunjungan->created_at)}}</td>
                  <td>{{$DataKunjungan->Poli->nama}}</td>
                  <td>{!!nl2br($DataKunjungan->keluhan)!!}</td>
                  <td>
                    <a href="{{Route('Edit-Kunjungan', ['Id' => HCrypt::Encrypt($DataKunjungan->id)])}}" class="btn btn-oval btn-info btn-outline" type="button">
                      Edit
                    </a>
                    <button class="btn btn-oval btn-warning btn-outline" type="button" onclick="hapus('{{Route('Hapus-Kunjungan', ['Id' => HCrypt::Encrypt($DataKunjungan->id)])}}')">
                      Hapus
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
