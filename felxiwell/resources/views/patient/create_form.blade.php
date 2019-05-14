@extends('layouts.app')
@section('title')
  Patient Create Form
@endsection

@section('content')
  <div class="jumbotron">
    <div class="row featurette">
      <div class="col-md-4 order-md-1">
      </div>
      <div class="col-md-4 order-md-2">
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

          <p><label>Date of birth: </label>
          <input type="text" name="dateOfBirth" value="{{old('dateOfBirth')}}"></p>

          <p><label>Gender: </label>
          <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
          </select></p>
      
          <p><label>Phone: </label>
          <input type="text" name="phone" value="{{old('phone')}}"></p>
          
          <p><label>Height: </label>
          <input type="text" name="height" value="{{old('height')}}"></p>
          
          <p><label>Weight: </label>
          <input type="text" name="weight" value="{{old('weight')}}"></p>
          
          <input type="submit" value="Create">
        </form>
      </div>  
    </div>
  </div>
@endsection