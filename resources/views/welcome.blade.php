@extends('master')


@section('content')
    <br>
    <h3>User Registration</h3>

    <h6><b>Please enter your information and click submit to continue to the order page</b></h6><br>

    @include('modules.validationerror')


    <form method='get' action='form'>
        <fieldset id="$request">
            <h5>Customer Information</h5>

            <label for='email'>Email:</label>
            <input type='text' name='email' id='email' value='{{ old('email')}}test@test.com' ><br>
            <label for='firstname'>First Name:</label>
            <input type='text' name='firstname' id='firstname' value='{{ old('firstname')}}Vijay'><br>
            <label for='lastname'>Last Name:</label>
            <input type='text' name='lastname' id='lastname' value='{{ old('lastname') }}Singh'><br>
            <label for='phone'>Phone Number:</label>
            <input type='text' name='phone' id='phone' value='{{ old('phone') }}1233216738'><br>
        </fieldset>
        <br>
        <input type="submit" value="Submit">
    </form>

@endsection
