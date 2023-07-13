@extends('master')
@section('content')

<hr>
<a href="{{route('home')}}">Home</a> |
<a href="{{route('users.index')}}">All Users</a>
<hr>
<h2>Edit</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

<!-- Perguntar se isso faz sentido -->
<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <button type="submit">Update</button>
</form>
    
@endsection
