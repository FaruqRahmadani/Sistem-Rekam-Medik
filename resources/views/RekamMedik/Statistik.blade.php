@extends('Layouts.Master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-heading">
          <div class="row">
            <div class="col-lg-12">
              <div class="pull-right">
                <h4>{{HStatistik::WaktuBerjalan()}}</h4>
              </div>
            </div>
          </div>
          <hr class="no-margin">
        </div>
        <div class="panel-body">
          <div class="panel-group">
            <div class="panel panel-green panel-demo">
              <div class="panel-heading panel-heading-collapsed">Data Kunjungan Pasien
                <a class="pull-right" href="#" data-tool="panel-collapse" data-toggle="tooltip">
                  <em class="fa fa-plus"></em>
                </a>
              </div>
              <div class="panel-wrapper collapse">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-3 col-sm-3">
                      <div class="panel widget bg-primary">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-primary-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{$Kunjungan->count()}}</div>
                            <div class="text-uppercase">Pasien Baru</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                      <div class="panel widget bg-purple">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/HStatistik::DiffDate('d'),2)}}
                            </div>
                            <div class="text-uppercase">Perhari</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                      <div class="panel widget bg-purple">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/(HStatistik::DiffDate('m')+1),2)}}
                            </div>
                            <div class="text-uppercase">Perbulan</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                      <div class="panel widget bg-purple">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-purple-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/(HStatistik::DiffDate('y')+1),2)}}
                            </div>
                            <div class="text-uppercase">Pertahun</div>
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
