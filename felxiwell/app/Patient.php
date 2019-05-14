<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  
  



  protected $fillable = ['firstName', 'lastName', 'dateOfBirth', 'gender', 'phone', 'height', 'weight', 'doctor_id'];
}
