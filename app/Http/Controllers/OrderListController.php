<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function index()
    {
        return view('orderlist');
    }

}
