
@extends('master')

@section('content')

    <style>
        table, th, td {
            border: 2px solid black;
            text-align: center;
            padding: 5px;
        }
    </style>

    THIS IS THE TEST PAGE!

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
