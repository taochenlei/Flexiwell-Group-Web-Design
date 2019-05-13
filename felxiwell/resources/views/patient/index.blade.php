@extends('layouts.app')
@section('title')
  Patients index
@endsection
  
@section('content')

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, {{Auth::user()->name}} !</h1>
      <p>Here is the list of your patients.</p>
      <hr>

      @forelse($patients as $patient)
        <h4><a href="/patient/{{$patient->id}}">{{$patient->name}}</a></h4>
        <h4>Date of birth: {{$patient->dateOfBirth}}</h4>
        <h4>Gender: {{$patient->gender}}</h4>
        <hr>
      @empty
        You don't have any patient yet.
      @endforelse

      <p><a class="btn btn-primary btn-lg" role="button" href="/patient/create">New patient&raquo;</a></p>
      
    </div>
  </div>
  



@endsection
