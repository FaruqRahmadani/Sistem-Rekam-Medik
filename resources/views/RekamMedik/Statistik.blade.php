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
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{$Kunjungan->count()}}</div>
                            <div>Pasien Baru</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/HStatistik::DiffDate('d'),2)}}
                            </div>
                            <div>Perhari</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/(HStatistik::DiffDate('m')+1),2)}}
                            </div>
                            <div>Perbulan</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/(HStatistik::DiffDate('y')+1),2)}}
                            </div>
                            <div>Pertahun</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-group">
            <div class="panel panel-green panel-demo">
              <div class="panel-heading panel-heading-collapsed">Data Rak Penyimpanan Saat Ini
                <a class="pull-right" href="#" data-tool="panel-collapse" data-toggle="tooltip">
                  <em class="fa fa-plus"></em>
                </a>
              </div>
              <div class="panel-wrapper collapse">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{$Rak->sum('jumlah')}}</div>
                            <div>Jumlah Rak</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{$Rak->sum('baris') * $Rak->sum('jumlah')}}</div>
                            <div>Jumlah Baris</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{HStatistik::TotalLebarRak($Rak)}} <small>cm</small></div>
                            <div>Total Lebar</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{HStatistik::TotalDayaTampung($Rak)}}</div>
                            <div>Daya Tampung Keseluruhan</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{HStatistik::RataBarisRak($Rak)}}</div>
                            <div>Rata-Rata Baris perRak</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{HStatistik::RataLebarRak($Rak)}} <small>cm</small> </div>
                            <div>Rata-Rata Lebar perRak</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{HStatistik::RataDayaTampung($Rak)}}</div>
                            <div>Rata-Rata Daya Tampung</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-group">
            <div class="panel panel-green panel-demo">
              <div class="panel-heading panel-heading-collapsed">Data Rak Penyimpanan 5 Tahun Kedepan
                <a class="pull-right" href="#" data-tool="panel-collapse" data-toggle="tooltip">
                  <em class="fa fa-plus"></em>
                </a>
              </div>
              <div class="panel-wrapper collapse">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/(HStatistik::DiffDate('y')+1),2)*5}}</div>
                            <div>Jumlah RM</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{number_format($Kunjungan->count()/(HStatistik::DiffDate('y')+1)*5/HStatistik::RataDayaTampung($Rak),0)+1}}
                            </div>
                            <div>Rak Diperlukan</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                      <div class="panel widget bg-gray">
                        <div class="row row-table">
                          <div class="col-xs-4 text-center bg-gray-dark pv-lg">
                            <em class="icon-paper-plane fa-3x"></em>
                          </div>
                          <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{HStatistik::RakTambahan($Kunjungan, $Rak)}}
                            </div>
                            <div>Rak Tambahan Diperlukan</div>
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
