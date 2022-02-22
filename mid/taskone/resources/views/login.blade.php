@extends('layouts.applayout');

@section('content')
<h1>Welcome to Login</h1>



<a href="{{route('admin')}}">Admin Login</a>

<a href="{{route('student')}}">Student Login</a>
@endsection