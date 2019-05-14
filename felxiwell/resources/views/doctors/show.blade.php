@extends('layouts.app')
@section('title')
  Patient List
@endsection

@section('content')

  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, {{Auth::user()->name}} !</h1>
      <p>Here is the list of Dr {{$doctor->name}}'s patients.</p>
      <hr>

      @forelse($patients as $patient)
        <h4><a href="/patient/{{$patient->id}}">{{$patient->firstName}} {{$patient->lastName}}</a></h4>
        <h4>Date of birth: {{$patient->dateOfBirth}}</h4>
        <h4>Gender: {{$patient->gender}}</h4>
        <hr>
      @empty
        Dr {{$doctor->name}} doesn't have any patient yet.
      @endforelse
    </div>
  </div>
  



@endsection
