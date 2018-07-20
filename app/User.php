<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  protected $fillable = [
    'nama', 'username', 'password', 'foto'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  public function setPasswordAttribute($value){
    $this->attributes['password'] = bcrypt($value);
  }
}
