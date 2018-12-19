<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customer;


class OrderController extends Controller
{
    public function index() {

        $users = Customer::orderBy('last_name', 'asc')->select('first_name', "last_name", 'id')->get();

        dump($users->toArray());

        return view('order')->with([
            'users' => $users
        ]);


        // return view('order');
    }

    public function store()

    {
        $users = Customer::orderBy('last_name')->select('first_name', "last_name", 'id')->get();

        $order = new Order();

        $order->type = request()->get('type');
        $order->fill = request()->get('fill');
        $order->rice = request()->get('rice');
        $order->beans = request()->get('beans');
        $order->veggies = request()->get('veggies');
        $order->special_note = request()->get('comment');


        $toppings = request()->get('toppings');

        if (!$toppings) {
            $topping_list = "None";
        } else {
            $topping_list = ucwords(join(', ', $toppings));
        }

        $order->toppings = $topping_list;

        $inside = request()->get('fill');

        if ($inside == "sofritas") {
            $total_price = "$6.50";
        } else {
            $total_price = "$7.95";
        }

        $order->price = $total_price;

        $randomString = strtoupper(str_random(5));
        $rand =  "SY".$randomString;

        $order->order_number = $rand;

        $order->customer_id = request()->get('customer_id');

//        $order = Customer::find($request->id);

        $order->save();

    // pivot table not working
        $order->customers()->sync([request()->get('customer_id')]);

        return view('order')->with([
            'users' => $users
        ]);
    }

}
