<?php
namespace App\Helpers;

use Carbon\Carbon;
use App\Kunjungan;

class StatistikHelper
{
  public static function WaktuBerjalan(){
    $Kunjungan = Kunjungan::all();
    $firstDate = Carbon::Parse($Kunjungan->first()->created_at->startOfDay());
    $return = Carbon::parse($firstDate)->diff(Carbon::now()->addDay())->format('%d Hari %m Bulan %y Tahun');
    return $return;
  }

  public static function DiffDate($format){
    $Kunjungan = Kunjungan::all();
    $firstDate = Carbon::Parse($Kunjungan->first()->created_at->startOfDay());
    $return = Carbon::parse($firstDate)->diff(Carbon::now()->addDay())->format('%'.$format);
    return $return;
  }
}
