@extends('master')

@section('title')
    Confirm deletion: {{ $user->first_name }} {{ $user->last_name }}'s User Profile
@endsection

@section('content')
    <h1>Confirm deletion</h1>

    <p>Are you sure you want to delete User: <strong>{{ $user->first_name }} {{ $user->last_name }}'s User Profile</strong>?</p>

    <form method='post' action='/edit/{{ $user->id }}'>
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type='submit' value='Yes, delete it!' class='btn btn-danger btn-small'>
    </form>

    <p class='cancel'>
        <a href='edit'>No, I changed my mind.</a>
    </p>

@endsection
