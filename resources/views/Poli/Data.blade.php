@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Tambah-Poli')}}" class="btn btn-oval btn-success" type="button">
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
                  <th>Nama Poli</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($Poli as $Index=>$DataPoli)
                  <tr>
                    <td>{{$Index+1}}</td>
                    <td>{{$DataPoli->nama}}</td>
                    <td>
                      <a href="{{Route('Edit-Poli', ['Id' => HCrypt::Encrypt($DataPoli->id)])}}" class="btn btn-oval btn-info btn-outline" type="button">
                        Edit
                      </a>
                      <button class="btn btn-oval btn-warning btn-outline" type="button" onclick="hapus('{{Route('Hapus-Poli', ['Id' => HCrypt::Encrypt($DataPoli->id)])}}')">
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
