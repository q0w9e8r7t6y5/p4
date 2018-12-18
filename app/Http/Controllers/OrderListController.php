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

        $users = Order::orderby('customer_id')->get();

        dump($users->ToArray());

        return view('orderlist');
    }

}
