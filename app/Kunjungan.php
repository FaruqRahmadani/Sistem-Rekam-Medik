<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
  protected $fillable = [
    'keluhan', 'poli_id'
  ];

  public function Poli(){
    return $this->belongsTo('App\Poli');
  }

  public function Pasien(){
    return $this->belongsTo('App\Pasien');
  }
}
