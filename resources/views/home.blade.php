@extends('master')
@section('content')
<hr>
<h2>Home</h2>
<hr>
<a href="{{route('users.create')}}">Create User</a>
<br>
<a href="{{route('users.index')}}">List all Users</a>

@endsection