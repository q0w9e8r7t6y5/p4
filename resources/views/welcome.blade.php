@extends('master')

@section('title')
    P4: Ordering System
@endsection

@section('content')
    <br>
    <h3>User Registration</h3>

    <h6><b>Please enter your information and click submit to continue to the order page</b></h6><br>

    @include('modules.validationerror')
    <h5>Customer Information</h5><b>* Required fields</b><br>
    <form method='get' action='form'>
        <fieldset id="$request">

            <label for='email'>* Email:</label>
            <input type='text' name='email' id='email' value='{{ old('email')}}' ><br>
            <label for='firstname'>* First Name:</label>
            <input type='text' name='firstname' id='firstname' value='{{ old('firstname')}}'><br>
            <label for='lastname'>* Last Name:</label>
            <input type='text' name='lastname' id='lastname' value='{{ old('lastname') }}'><br>
            <label for='phone'>* Phone Number:</label>
            <input type='text' name='phone' id='phone' value='{{ old('phone') }}'><br>
        </fieldset>
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>

   <h5>Admin Control Panel</h5>
   <b><a href='orderlist'>Orders</a> |<a href='edit'>Users</a></b>

@endsection
