@extends('master')

<style>
    table, th, td {
        border: 2px solid black;
        text-align: center;
        padding: 5px;
    }
</style>


@section('title')
    {{ $user->first_name }} {{ $user->last_name }}
@endsection

@section('content')
    <h4>User Information for {{ $user->first_name }} {{ $user->last_name }} </h4>

<div class='user cf'>
    <table>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Added</th>
        </tr>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->created_at }}</td>
                <td><b>
                    <a href='{{ $user->id }}/edit'>Edit</a></b>
                </td>
                <td><b>
                    <a href='{{ $user->id }}/delete'>Delete</a></b>
                </td>

            </tr>

    </table>

</div>


{{--@include('modules.homebar')--}}

@endsection
