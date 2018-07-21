@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Tambah-Pasien')}}" class="btn btn-oval btn-success" type="button">
            Tambah
          </a>
        </div>
        <hr class="no-margin">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="datatable2">
              <thead>
                <tr>
                  <th>#</th>
                  <th>No. Rekam Medik</th>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>Jenis Kelamin</th>
                  <th>Pekerjaan</th>
                  <th>Alamat</th>
                  <th>No. Telepon</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Pasien as $Index=>$DataPasien)
                  <tr>
                    <td>{{$Index+1}}</td>
                    <td>{{$DataPasien->no_rm}}</td>
                    <td>{{$DataPasien->nama}}</td>
                    <td>{{$DataPasien->Umur}} Tahun</td>
                    <td>{{$DataPasien->JenisKelaminText}}</td>
                    <td>{{$DataPasien->PekerjaanText}}</td>
                    <td>{!!nl2br($DataPasien->alamat)!!}</td>
                    <td>{{$DataPasien->no_telepon}}</td>
                    <td>
                      <a href="{{Route('Edit-Pasien', ['Id' => HCrypt::Encrypt($DataPasien->id)])}}" class="btn btn-oval btn-info btn-outline" type="button">
                        Edit
                      </a>
                      <button class="btn btn-oval btn-warning btn-outline" type="button" onclick="hapus('{{Route('Hapus-Pasien', ['Id' => HCrypt::Encrypt($DataPasien->id)])}}')">
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
    </div>
  @endsection
