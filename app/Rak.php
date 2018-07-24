<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
  protected $fillable = [
    'jumlah', 'tinggi', 'lebar'
  ];
}
