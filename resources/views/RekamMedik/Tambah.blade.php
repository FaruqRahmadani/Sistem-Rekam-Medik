@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <a href="{{Route('Data-Penyimpanan-Rekam-Medik')}}" class="btn btn-oval btn-success" type="button">
            Kembali
          </a>
        </div>
        <hr class="no-margin">
        <div class="panel-body">
          <form class="form-horizontal row-border" action="{{ Route('submitTambah-Penyimpanan-Rekam-Medik') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="col-sm-2 control-label">Jumlah</label>
              <div class="col-sm-10">
                <input class="form-control" type="number" placeholder="Jumlah" name="jumlah" min="0" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Lebar (cm)</label>
              <div class="col-sm-10">
                <input class="form-control" type="number" placeholder="Lebar" name="lebar" min="0" step="0.1" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Baris</label>
              <div class="col-sm-10">
                <input class="form-control" type="number" placeholder="Baris" name="baris" min="0" required>
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
