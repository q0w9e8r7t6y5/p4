@extends('master')

@section('title')
    User List
@endsection

@section('content')

<h4>User List</h4>
<h6><b>Please click on a name to see more information or modify/delete the user from our database</b></h6>

@include('users')

@include('modules.homebar')

@endsection
