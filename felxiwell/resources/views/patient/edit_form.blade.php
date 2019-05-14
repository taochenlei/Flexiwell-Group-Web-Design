@extends('layouts.app')
@section('title')
    Edit patient form
@endsection

@section('content')
<div class="jumbotron">
  <div class="row featurette">
    <div class="col-md-4 order-md-1">
    </div>
    <div class="col-md-4 order-md-2">
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

      <p><label>Date of birth: </label>
      <input type="text" name="dateOfBirth" value="{{$patient->dateOfBirth}}"><br></p>
      
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
      
      <p><label>Height: </label>
      <input type="text" name="height" value="{{$patient->height}}"><br></p>
      
      <p><label>Weight: </label>
      <input type="text" name="weight" value="{{$patient->weight}}"><br></p>
      
      <p><input type="submit" value="Update"></p>
      </form>

    </div>  
  </div>  
</div>  
@endsection