<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderList;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function index()
    {

        $orders = Order::orderby('created_at', 'desc')->get();

        return view('orderlist')->with([
            'orders' => $orders
        ]);
    }



}
