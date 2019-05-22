<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

  protected $fillable = ['firstName', 'lastName', 'dateOfBirth', 'dateOfInjury',
  'dateOfAssessment',  'gender', 'phone', 'height', 'weight', 'doctor_id', 
  'bloodPressureS', 'bloodPressureD', 'heartRate', 'neckFlexion', 'neckExtension', 
  'elbowFlexion', 'elbowExtension', 'gripStrengthL1', 'gripStrengthL2', 'gripStrengthL3', 
  'gripStrengthR1', 'gripStrengthR2', 'gripStrengthR3'];
}

