<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Pasien extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'no_rm', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'pekerjaan', 'agama', 'alamat', 'no_telepon'
  ];

  public function Kunjungan(){
    return $this->hasMany('App\Kunjungan');
  }

  public function getUmurAttribute(){
    $Lahir = $this->tanggal_lahir;
    $Umur = Carbon::now()->diffInYears($Lahir);
    return $Umur;
  }

  public function getJenisKelaminTextAttribute(){
    switch ($this->jenis_kelamin) {
      case 1:
        $Return = 'Laki - Laki';
        break;
      case 2:
        $Return = 'Perempuan';
        break;
      default:
        $Return = 'What ur sex?';
        break;
    }
    return $Return;
  }

  public function getPekerjaanTextAttribute(){
    switch ($this->pekerjaan) {
      case 1:
        $Return = 'Pegawai Negeri';
        break;
      case 2:
        $Return = 'Polri/TNI';
        break;
      case 3:
        $Return = 'Swasta';
        break;
      case 4:
        $Return = 'Pelajar/Mahasiswa';
        break;
      default:
        $Return = 'What ur job?';
        break;
    }
    return $Return;
  }

  public function getAgamaTextAttribute(){
    switch ($this->agama) {
      case 1:
        $Return = 'Islam';
        break;
      case 2:
        $Return = 'Katolik';
        break;
      case 3:
        $Return = 'Protestan';
        break;
      case 4:
        $Return = 'Buddha';
        break;
      case 5:
        $Return = 'Hindu';
        break;
      default:
        $Return = 'What ur job?';
        break;
    }
    return $Return;
  }
}
