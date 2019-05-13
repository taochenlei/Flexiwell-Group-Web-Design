<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  
  



  protected $fillable = ['name', 'dateOfBirth', 'gender', 'phone', 'height', 'weight', 'doctor_id'];
}
