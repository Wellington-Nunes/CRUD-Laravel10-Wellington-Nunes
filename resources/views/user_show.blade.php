@extends('master')
@section('content')
<hr>
<a href="{{route('home')}}">Home</a> |
<a href="{{route('users.index')}}">All Users</a>
<hr>

<h2>Show</h2>

<div>
    <h4>{{$user->name}}</h3>
    <p>{{$user->email}}</p>

    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>
    </form>
</div>
    
@endsection
