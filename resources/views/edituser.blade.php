@extends('master')

@section('title')
    Edit {{ $user->first_name }} {{ $user->last_name }}'s User Profile
@endsection

@section('content')

@include('modules.validationerror')


<h4>Edit {{ $user->first_name }} {{ $user->last_name }}'s User Profile</h4>

<form method='POST' action='/p4/public/edit/{{ $user->id }}'>
    <div class='details'><b>* Required fields</b><br>

        {{ method_field('put') }}
        {{ csrf_field() }}

        <label for='first_name'>* First Name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', $user->first_name) }}'><br>

        <label for='last_name'>* Last Name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', $user->last_name) }}'><br>

        <label for='email'>* Email</label>
        <input type='text' name='email' id='email' value='{{ old('email', $user->email) }}'><br>

        <label for='first_name'>* Phone Number</label>
        <input type='text' name='phone' id='phone' value='{{ old('phone', $user->phone) }}'><br>

        <input type='submit' value='Save changes' class='btn btn-primary'>
    </div>
</form>

@endsection
