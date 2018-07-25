@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Tambah-Penyimpanan-Rekam-Medik')}}" class="btn btn-oval btn-success" type="button">
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
                  <th>Jumlah</th>
                  <th>Jumlah Baris</th>
                  <th>Lebar (cm)</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Rak as $Index=>$DataRak)
                  <tr>
                    <td>{{$Index+1}}</td>
                    <td>{{$DataRak->jumlah}}</td>
                    <td>{{$DataRak->baris}}</td>
                    <td>{{$DataRak->lebar}}</td>
                    <td>
                      <a href="{{Route('Edit-Penyimpanan-Rekam-Medik', ['Id' => HCrypt::Encrypt($DataRak->id)])}}" class="btn btn-oval btn-info btn-outline" type="button">
                        Edit
                      </a>
                      <button class="btn btn-oval btn-warning btn-outline" type="button" onclick="hapus('{{Route('Hapus-Penyimpanan-Rekam-Medik', ['Id' => HCrypt::Encrypt($DataRak->id)])}}')">
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
