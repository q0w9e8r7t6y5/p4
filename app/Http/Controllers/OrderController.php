<?php

namespace App\Http\Controllers;

use App\Order;

class OrderController extends Controller
{

    public function index()

    {
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

        $order->save();

        return view('order');
    }

}

