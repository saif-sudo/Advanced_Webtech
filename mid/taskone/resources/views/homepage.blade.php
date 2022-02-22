@extends('layouts.applayout')

@section('content')
<h1>Welcome to HomePage</h1>
@foreach($course as $c)


<h3>Course:{{$c->course}}</h3>
<h3>Instructor:{{$c->Instructor}}</h3>
<h3>Duration:{{$c->Duration}}</h3>
<h3>Starts:{{$c->Start}}</h3>

@endforeach
@endsection