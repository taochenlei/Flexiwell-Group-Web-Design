<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

  
  protected $fillable = ['email', 'name', 'password', 'type'];
}
