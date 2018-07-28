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

  public static function RataBarisRak($Data){
    $result = 0;
    foreach ($Data as $DataRak) {
      $result = $result+($DataRak->jumlah * $DataRak->baris);
    }
    $result = $result / $Data->sum('jumlah');

    return $result;
  }

  public static function TotalLebarRak($Data){
    $result = 0;
    foreach ($Data as $DataRak) {
      $result = $result+($DataRak->jumlah * $DataRak->lebar * $DataRak->baris);
    }

    return $result;
  }

  public static function RataLebarRak($Data){
    $result = 0;
    foreach ($Data as $DataRak) {
      $result = $result+($DataRak->jumlah * $DataRak->lebar * $DataRak->baris);
    }
    $result = $result / $Data->sum('jumlah');

    return $result;
  }

  public static function TotalDayaTampung($Data){
    $result = 0;
    foreach ($Data as $DataRak) {
      $result = $result+($DataRak->jumlah * $DataRak->lebar * $DataRak->baris);
    }
    $result = $result / 0.5 * $Data->sum('jumlah');

    return $result;
  }

  public static function RataDayaTampung($Data){
    $result = 0;
    foreach ($Data as $DataRak) {
      $result = $result+($DataRak->jumlah * $DataRak->lebar * $DataRak->baris);
    }
    $result = $result / 0.5 / $Data->sum('jumlah');

    return $result;
  }

  public static function RakTambahan($Kunjungan, $Rak){
    $Kunjungan = Kunjungan::all();
    $firstDate = Carbon::Parse($Kunjungan->first()->created_at->startOfDay());
    $DiffYear = Carbon::parse($firstDate)->diff(Carbon::now()->addDay())->format('%y')+1;

    $RataDayaTampung = 0;
    foreach ($Rak as $DataRak) {
      $RataDayaTampung = $RataDayaTampung+($DataRak->jumlah * $DataRak->lebar * $DataRak->baris);
    }
    $RataDayaTampung = $RataDayaTampung / 0.5 / $Rak->sum('jumlah');

    $RakDiperlukan = number_format($Kunjungan->count()/($DiffYear)*5/$RataDayaTampung,0)+1;
    $JumlahRak = $Rak->sum('jumlah');
    $result = ($RakDiperlukan < $JumlahRak) ? 0 : ($RakDiperlukan - $JumlahRak);

    return $result;
  }
}
