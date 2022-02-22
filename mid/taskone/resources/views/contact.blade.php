@extends('layouts.applayout');

@section('content')
<h1>Welcome to Contact</h1>
@foreach($contact as $c)


<h3>Name:{{$c->name}}</h3>
<h3>Position:{{$c->position}}</h3>
<h3>E-mail:{{$c->mail}}</h3>

@endforeach
@endsection