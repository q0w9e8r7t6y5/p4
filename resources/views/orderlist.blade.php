
@extends('master')

@section('title')
    Order List
@endsection

@section('content')

@include('modules.styling')

    <h4>Order List</h4>
    <h6><b>Listed below are all current orders in our database</b></h6>

        <table>
            <tr><b>
                <th>Order Number</th>
                <th>Customer ID</th>
                <th>Type</th>
                <th>Fill</th>
                <th>Rice</th>
                <th>Beans</th>
                <th>Veggies</th>
                <th>Toppings</th>
                <th>Special Note</th>
                <th>Price</th>
            </tr></b>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->order_number }}</td>
                <td>{{ $order->customer_id }}</td>
                <td>{{ $order->type }}</td>
                <td>{{ $order->fill }}</td>
                <td>{{ $order->rice }}</td>
                <td>{{ $order->beans }}</td>
                <td>{{ $order->veggies }}</td>
                <td>{{ $order->toppings }}</td>
                <td>{{ $order->special_note }}</td>
                <td>{{ $order->price }}</td>
            </tr>
            @endforeach
        </table>



@include('modules.homebar')

@endsection
