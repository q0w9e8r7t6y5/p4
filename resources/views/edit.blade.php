@extends('master')

@section('content')

@include('modules.styling')

    <section id='allUsers'>
        <h4>User Editing System</h4>
            @include('users')
    </section>

@include('modules.homebar')

@endsection
