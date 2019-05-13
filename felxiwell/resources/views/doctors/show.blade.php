@extends('layouts.app')
@section('title')
  Show Patient
@endsection

@section('content')
        
  <?php $madeReview = 'No';?>

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{$patient->name}}</h1>
      <p>Date of birth: {{$patient->dateOfBirth}}</p>
      <p>Gender: {{$patient->gender}}</p>
      <p>Phone: {{$patient->phone}}</p>
      <p>Height: {{$patient->height}}</p>
      <p>Weight: {{$patient->weight}}</p>
      <p>BMI: {{round($patient->weight/($patient->height/100)**2, 2)}}</p>
      <p>(BMI = KG / M ^ 2, 18.5~24.9)</p>
      
        <p><a class="btn btn-primary btn-lg" href="/patient/{{$patient->id}}/edit" role="button">Edit &raquo;</a>
          <form method="POST" action="/patient/{{$patient->id}}">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
          <input type="submit" value="Delete">
          </form>
        </p>
        
    </div>
  </div>


@endsection