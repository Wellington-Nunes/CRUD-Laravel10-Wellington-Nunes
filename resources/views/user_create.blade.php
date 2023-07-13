@extends('master')
@section('content')

<hr>
<a href="{{route('users.index')}}">View all Users</a>
<hr>

<h2>Create</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf <!-- Sempre precisamos usar isso em forms -->
    <input type="text" name="name" placeholder="Your name">
    <input type="text" name="email" placeholder="Your email" >
    <input type="text" name="password" placeholder="Your password">
    <button type="submit">Create</button>
</form>


    
@endsection
