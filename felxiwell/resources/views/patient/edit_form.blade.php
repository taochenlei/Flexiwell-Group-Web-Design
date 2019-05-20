@extends('layouts.app')
@section('title')
    Edit patient form
@endsection

@section('content')
<div class="jumbotron">
  <div class="row featurette">
    <div class="col-1 order-1"></div>
    <div class="col-5 order-3"></div>
    <div class="col-6 order-2">
      <h1>Edit Patient</h1>
      <p>
      @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      </p>

      <form method="post" action="/patient/{{$patient->id}}">
        {{csrf_field()}}
        {{ method_field('PUT') }}
      <p><label>First Name: </label>
      <input type="text" name="firstName" value="{{$patient->firstName}}"></p>

      <p><label>Last Name: </label>
      <input type="text" name="lastName" value="{{$patient->lastName}}"></p>

      <p><label>Gender: </label>
      <select name="gender">
        @if($patient->gender == "male")
          <option value="male" selected="selected">male</option>
          <option value="female">female</option>
        @else
          <option value="male">male</option>
          <option value="female" selected="selected">female</option>
        @endif
      </select></p>
      
      <p><label>Phone: </label>
      <input type="text" name="phone" value="{{$patient->phone}}"><br></p>

      <p><label>Date of Birth: (yyyy-mm-dd)</label>
      <input type="text" name="dateOfBirth" value="{{$patient->dateOfBirth}}"><br></p>
      
      <p><label>Date of Injury: (yyyy-mm-dd)</label>
      <input type="text" name="dateOfInjury" value="{{$patient->dateOfInjury}}"><br></p>

      <p><label>Date of Assessment: (yyyy-mm-dd)</label>
      <input type="text" name="dateOfAssessment" value="{{$patient->dateOfAssessment}}"><br></p>

      <p><label>Weight (kg): </label>
      <input type="text" name="weight" value="{{$patient->weight}}"><br></p>

      <p><label>Height (cm): </label>
      <input type="text" name="height" value="{{$patient->height}}"><br></p>
      
      <p><label>Systolic Blood Pressure (mmHg): </label>
      <input type="text" name="bloodPressureS" value="{{$patient->bloodPressureS}}"><br></p>
      
      <p><label>Diastolic Blood Pressure (mmHg): </label>
      <input type="text" name="bloodPressureD" value="{{$patient->bloodPressureD}}"><br></p>
      
      <p><label>Heart Rate (bpm): </label>
      <input type="text" name="heartRate" value="{{$patient->heartRate}}"><br></p>
      
      <p><label>Neck Flexion (°): </label>
      <input type="text" name="neckFlexion" value="{{$patient->neckFlexion}}"><br></p>
      
      <p><label>Neck Extension (°): </label>
      <input type="text" name="neckExtension" value="{{$patient->neckExtension}}"><br></p>

      <p><label>Elbow Flexion (°): </label>
      <input type="text" name="elbowFlexion" value="{{$patient->elbowFlexion}}"><br></p>
      
      <p><label>Elbow Extension (°): </label>
      <input type="text" name="elbowExtension" value="{{$patient->elbowExtension}}"><br></p>

      <p><label>Grip Strength (kg): </label>

      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Right</th>
            <td><input type="text" name="gripStrengthR1" value="{{$patient->gripStrengthR1}}"></td>
            <td><input type="text" name="gripStrengthR2" value="{{$patient->gripStrengthR2}}"></td>
            <td><input type="text" name="gripStrengthR3" value="{{$patient->gripStrengthR3}}"></td>
          </tr>
          <tr>
            <th scope="row">Left</th>
            <td><input type="text" name="gripStrengthL1" value="{{$patient->gripStrengthL1}}"></td>
            <td><input type="text" name="gripStrengthL2" value="{{$patient->gripStrengthL2}}"></td>
            <td><input type="text" name="gripStrengthL3" value="{{$patient->gripStrengthL3}}"></td>
          </tr>
        </tbody>
      </table>
      
      
      <p><input type="submit" value="Update"></p>
      </form>

    </div>  
  </div>  
</div>  
@endsection