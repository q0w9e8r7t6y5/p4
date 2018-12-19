@extends('master')

@section('content')

    <style>
        table, th, td {
            border: 2px solid black;
            text-align: center;
            padding: 5px;
        }
    </style>


    <section id='allUsers'>
        <h4>User Editing System</h4>
            @include('users')
    </section>

@include('modules.homebar')

@endsection
