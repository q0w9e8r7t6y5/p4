@extends('master')

@section('content')

    <section id='allUsers'>
        <h2>User Editing System</h2>
        @foreach($users as $user)
            @include('users')
        @endforeach
    </section>

@include('modules.homebar')

@endsection
