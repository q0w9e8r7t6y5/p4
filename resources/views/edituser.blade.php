@extends('master')

@section('title')
    Edit {{ $user->first_name }} {{ $user->last_name }}'s User Profile
@endsection

@section('content')

    @if(count($errors) > 0)
        <div class='alert'>
            Please correct the errors below.
        </div>
    @endif

    <h1>Edit {{ $user->first_name }} {{ $user->last_name }}'s User Profile</h1>

    <form method='POST' action='edit/{{ $user->id }}/'>
        <div class='details'>* Required fields</div>

        {{ method_field('put') }}
        {{ csrf_field() }}

        <label for='first_name'>* First Name</label>
        <input type='text' name='first_name' id='first_name' value='{{ old('first_name', $user->first_name) }}'>
        {{--@include('modules.field-error', ['field' => 'first_name'])--}}

        <label for='last_name'>* Last Name</label>
        <input type='text' name='last_name' id='last_name' value='{{ old('last_name', $user->last_name) }}'>
        {{--@include('modules.field-error', ['field' => 'last_name'])--}}

        <label for='email'>* Email</label>
        <input type='text' name='email' id='email' value='{{ old('email', $user->email) }}'>
        {{--@include('modules.field-error', ['field' => 'email'])--}}

        <label for='first_name'>* Phone Number</label>
        <input type='text' name='phone' id='phone' value='{{ old('phone', $user->phone) }}'>
        {{--@include('modules.field-error', ['field' => 'phone'])--}}

        <input type='submit' value='Save changes' class='btn btn-primary'>
    </form>


@endsection
