@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Tambah-User')}}" class="btn btn-oval btn-success" type="button">
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
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($User as $Index=>$DataUser)
                  <tr>
                    <td>{{$Index+1}}</td>
                    <td>
                      <img class="img-thumbnail img-circle" src="{{asset('img/user/'.$DataUser->foto)}}">
                      {{$DataUser->nama}}
                    </td>
                    <td>{{$DataUser->username}}</td>
                    <td>
                      <a href="{{Route('Edit-User', ['Id' => HCrypt::Encrypt($DataUser->id)])}}" class="btn btn-oval btn-info btn-outline" type="button">
                        Edit
                      </a>
                      <button class="btn btn-oval btn-warning btn-outline" type="button" onclick="hapus('{{Route('Hapus-User', ['Id' => HCrypt::Encrypt($DataUser->id)])}}', {{$DataUser->id == Auth::User()->id ? "'Tidak Dapat Hapus Data Sendiri'" : 0}})">
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
