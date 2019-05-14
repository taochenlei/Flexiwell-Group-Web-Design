@extends('layouts.app')
@section('title')
  Doctor List
@endsection
  
@section('content')

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, {{Auth::user()->name}} !</h1>
      <p>Here is the list of doctors.</p>
      <hr>

      @forelse($doctors as $doctor)
        <h4><a href="/patientsForDoctor/{{$doctor->id}}">Dr {{$doctor->name}}</a></h4>
        <h4>Email: {{$doctor->email}}</h4>
        
        <a href="/doctor/{{$doctor->id}}"><input type="submit" value="Delete"></a>

        <hr>
      @empty
        You don't have any patient yet.
      @endforelse

      <p><a class="btn btn-primary btn-lg" role="button" href="/register">Register for a new doctor&raquo;</a></p>
      
    </div>
  </div>
  



@endsection
