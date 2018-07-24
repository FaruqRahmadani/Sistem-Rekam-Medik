@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-body">
          <div class="panel-group">
            <div class="panel panel-green panel-demo">
              <div class="panel-heading panel-heading-collapsed">Data Pasien
                <a class="pull-right" href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel">
                  <em class="fa fa-plus"></em>
                </a>
              </div>
              <div class="panel-wrapper collapse">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-primary">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{$Kunjungan->count()}}</div>
                            <div class="text-uppercase">Kunjungan Pasien Baru</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-purple">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/1+(Carbon\Carbon::parse($Kunjungan->first()->created_at)->diffInMonths(Carbon\Carbon::parse($Kunjungan->last()->created_at))),2)}}
                            </div>
                            <div class="text-uppercase">Kunjungan Perbulan</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-purple">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/Carbon\Carbon::parse($Kunjungan->first()->created_at)->diffInDays(Carbon\Carbon::parse($Kunjungan->last()->created_at)),2)}}
                            </div>
                            <div class="text-uppercase">Kunjungan Perhari</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
