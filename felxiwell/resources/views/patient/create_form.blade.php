@extends('layouts.app')
@section('title')
  Patient Create Form
@endsection

@section('content')
  <div class="jumbotron">
    <div class="row featurette">
      <div class="col-1 order-1"></div>
      <div class="col-5 order-3"></div>
      <div class="col-6 order-2">
        <h1>Create a new Patient</h1>
        <hr class="featurette-divider">
        
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
        
        <form method="post" action="/patient">
          {{csrf_field()}}
          
          @if (Auth::user()->type == 'manager')
            <p><label>Create For: </label>
            <select name="doctor_id">
              <option value="{{Auth::user()->id}}">Myself</option>
              @forelse ($doctors as $doctor)
                <option value="{{$doctor->id}}">Dr {{$doctor->name}}</option>
              @empty
              @endforelse
            </select></p>
          @endif
          
          <p><label>First Name: </label>
          <input type="text" name="firstName" value="{{old('firstName')}}"></p>
    
          <p><label>Last Name: </label>
          <input type="text" name="lastName" value="{{old('lastName')}}"></p>

          <p><label>Date of Birth: (yyyy-mm-dd)</label>
          <input type="text" name="dateOfBirth" value="{{old('dateOfBirth')}}"><br></p>
    
          <p><label>Gender: </label>
          <select name="gender">
              <option value="male">male</option>
              <option value="female">female</option>
          </select></p>
          
          <p><label>Phone: </label>
          <input type="text" name="phone" value="{{old('phone')}}"><br></p>
          
          
          
          
          <p><label>Date of Injury: (yyyy-mm-dd)</label>
          <input type="text" name="dateOfInjury" value="{{old('dateOfInjury')}}"><br></p>
    
          <p><label>Date of Assessment: (yyyy-mm-dd)</label>
          <input type="text" name="dateOfAssessment" value="{{old('dateOfAssessment')}}"><br></p>
    
          <p><label>Weight (kg): </label>
          <input type="text" name="weight" value="{{old('weight')}}"><br></p>
    
          <p><label>Height (cm): </label>
          <input type="text" name="height" value="{{old('height')}}"><br></p>
          
          <p><label>Systolic Blood Pressure (mmHg): </label>
          <input type="text" name="bloodPressureS" value="{{old('bloodPressureS')}}"><br></p>
          
          <p><label>Diastolic Blood Pressure (mmHg): </label>
          <input type="text" name="bloodPressureD" value="{{old('bloodPressureD')}}"><br></p>
          
          <p><label>Heart Rate (bpm): </label>
          <input type="text" name="heartRate" value="{{old('heartRate')}}"><br></p>
          
          <p><label>Neck Flexion (°): </label>
          <input type="text" name="neckFlexion" value="{{old('neckFlexion')}}"><br></p>
          
          <p><label>Neck Extension (°): </label>
          <input type="text" name="neckExtension" value="{{old('neckExtension')}}"><br></p>
          
          <p><label>Elbow Flexion (°): </label>
          <input type="text" name="elbowFlexion" value="{{old('elbowFlexion')}}"><br></p>
          
          <p><label>Elbow Extension (°): </label>
          <input type="text" name="elbowExtension" value="{{old('elbowExtension')}}"><br></p>
          
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
                <td><input type="text" name="gripStrengthR1" value="{{old('gripStrengthR1')}}"></td>
                <td><input type="text" name="gripStrengthR2" value="{{old('gripStrengthR2')}}"></td>
                <td><input type="text" name="gripStrengthR3" value="{{old('gripStrengthR3')}}"></td>
              </tr>
              <tr>
                <th scope="row">Left</th>
                <td><input type="text" name="gripStrengthL1" value="{{old('gripStrengthL1')}}"></td>
                <td><input type="text" name="gripStrengthL2" value="{{old('gripStrengthL2')}}"></td>
                <td><input type="text" name="gripStrengthL3" value="{{old('gripStrengthL3')}}"></td>
              </tr>
            </tbody>
          </table>

          <input type="submit" value="Create">
        </form>
      </div>  
    </div>
  </div>
@endsection
