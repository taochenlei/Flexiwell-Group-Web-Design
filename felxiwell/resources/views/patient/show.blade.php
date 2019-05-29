@extends('layouts.app')
@section('title')
  Show Patient
@endsection

@section('content')
        
<?php $timeSinceInjury = time() - strtotime($patient->dateOfInjury);?>

<?php 
$time_input = strtotime("2011/05/21");  
$date_input = getDate($time_input);  
?>

<?php
function diffDate($dateStr1, $dateStr2)
{
    $datetime1 = new DateTime($dateStr1);
    $datetime2 = new DateTime($dateStr2);
    $interval = $datetime1->diff($datetime2);
    $time['y']         = $interval->format('%Y');
    $time['m']         = $interval->format('%m');
    $time['d']         = $interval->format('%d');
    $time['h']         = $interval->format('%H');
    $time['i']         = $interval->format('%i');
    $time['s']         = $interval->format('%s');
    return $time;
}?>

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{$patient->firstName}} {{$patient->lastName}}</h1>
      <hr>
      <p><b>Gender:</b> {{$patient->gender}}</p>
      <p><b>Phone:</b> {{$patient->phone}}</p>
      <p><b>Date of Birth:</b> {{$patient->dateOfBirth}}</p>
      <p><b>Age:</b> {{date('Y', time()) - date('Y', strtotime($patient->dateOfBirth))}}</p>
      <p><b>Date of Injury:</b> {{$patient->dateOfInjury}}</p>
      <p><b>Date of Assessment:</b> {{$patient->dateOfAssessment}}</p>
      <p><b>Time since injury:</b> {{diffDate(date('Y-m-d', time()), $patient->dateOfInjury)['y']}} year(s), 
                            {{diffDate(date('Y-m-d', time()), $patient->dateOfInjury)['m']}} month(es), and 
                            {{diffDate(date('Y-m-d', time()), $patient->dateOfInjury)['d']}} day(s)</p>
      <p><b>Weight:</b> {{$patient->weight}} (kg)</p>
      <p><b>Height:</b> {{$patient->height}} (cm)</p>
      @if($patient->height == 0)
        asdasd
      @else
        <p><b>BMI:</b> {{round($patient->weight/($patient->height/100)**2, 2)}}</p>
        <p>(BMI = Weight (kg) / Height^2 (m^2), 18.5~24.9)</p>
      @endif
      <hr>
      <p><b>Blood Pressure:</b> {{$patient->bloodPressureS}}/{{$patient->bloodPressureD}} (mmHg)</p>
      <p>(Systolic Blood Pressure: 90 - 120 (mmHg), Diastolic Blood Pressure: 60 - 80 (mmHg))</p>
      <p><b>Heart Rate:</b> {{$patient->heartRate}} (bpm)</p>
      <p>(Heart Rate Range: 60 - 100 (bpm))</p>
      <hr>
      <p><b>Neck Flexion:</b> {{$patient->neckFlexion}}°</p>
      <p>(Neck Flexion Normal: 60°)</p>
      <p><b>Neck Flexion Percentage loss:</b> {{round((60 - $patient->neckFlexion) / 60 * 100, 0)}}%</p>
      <p><b>Neck Extension:</b> {{$patient->neckExtension}}°</p>
      <p>(Neck Extension Normal: 70°)</p>
      <p><b>Neck Extension Percentage loss:</b> {{round((70 - $patient->neckExtension) / 70 * 100, 0)}}%</p>
      <p><b>Neck ROM:</b> {{$patient->neckFlexion + $patient->neckExtension}}°</p>
      <p><b>Neck Percentage Loss:</b> {{round((130 - $patient->neckFlexion - $patient->neckExtension) / 130 * 100, 0)}}%</p>
      <hr>
      <p><b>Elbow Flexion:</b> {{$patient->elbowFlexion}}°</p>
      <p>(Elbow Flexion Normal: 145°)</p>
      <p><b>Elbow Flexion Percentage loss:</b> {{round((145 - $patient->elbowFlexion) / 145 * 100, 0)}}%</p>
      <p><b>Elbow Extension:</b> {{$patient->elbowExtension}}°</p>
      <p>(Elbow Extension Normal: 0°)</p>
      <p><b>Elbow ROM:</b> {{$patient->elbowFlexion + $patient->elbowExtension}}°</p>
      <p><b>Elbow Percentage Loss:</b> {{round((145 - $patient->elbowFlexion - $patient->elbowExtension) / 145 * 100, 0)}}%</p>
      <hr>
      <p><b>Grip Strength: </b>(kg)</p>
      
      <div class="col-md-6 order-md-2">
      </div>
      <div class="col-md-6 order-md-1">
        <table width="30" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">1</th>
              <th scope="col">2</th>
              <th scope="col">3</th>
              <th scope="col">Average</th>
              <th scope="col">Normal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Right</th>
              <td>{{$patient->gripStrengthR1}}</td>
              <td>{{$patient->gripStrengthR2}}</td>
              <td>{{$patient->gripStrengthR3}}</td>
              <td>{{round(($patient->gripStrengthR1 + $patient->gripStrengthR2 + $patient->gripStrengthR3) / 3, 2)}}</td>
              <td></td>
            </tr>
            <tr>
              <th scope="row">Left</th>
              <td>{{$patient->gripStrengthL1}}</td>
              <td>{{$patient->gripStrengthL2}}</td>
              <td>{{$patient->gripStrengthL3}}</td>
              <td>{{round(($patient->gripStrengthL1 + $patient->gripStrengthL2 + $patient->gripStrengthL3) / 3, 2)}}</td>
              <td></td>
            </tr>
          </tbody>
        </table>
        
        <p><a class="btn btn-primary btn-lg" href="/patient/{{$patient->id}}/edit" role="button">Edit &raquo;</a>
          <form method="POST" action="/patient/{{$patient->id}}">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
          <input type="submit" value="Delete">
          </form>
        </p>
      </div>
      
    </div>
  </div>


@endsection