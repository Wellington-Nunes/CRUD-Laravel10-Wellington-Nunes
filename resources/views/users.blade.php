@extends('master')
@section('content')

<hr>
<a href="{{route('home')}}">Home</a> |
<a href="{{route('users.create')}}">Create User</a>
<hr>
<h2>All Users</h2>
<ul>
    @foreach ($users as $user)
    <li>{{$user->name}}
        | <a href="{{route('users.edit', ['user' => $user->id])}}">Edit</a>
        | <a href="{{route('users.show', ['user' => $user->id])}}">Show</a>
    </li>
    @endforeach
</ul>

@endsection