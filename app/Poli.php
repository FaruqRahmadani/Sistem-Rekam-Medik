<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poli extends Model
{
  use SoftDeletes;
  
  protected $fillable = [
    'nama'
  ];
}
