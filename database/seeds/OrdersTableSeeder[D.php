<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $order = Order::updateOrCreate(
            ['fill' => 'Chicken', 'rice' => 'White Rice', 'type' => 'Burrito',
                "beans" => 'Yes', 'veggies' => 'No', 'toppings' => 'None',
                'special_note' => 'tortilla on the side please', 'price' => '$7.95',
                'order_number' => 'SY11111', "customer_id" => '1']
        );

        $order = Order::updateOrCreate(
            ['fill' => 'Carnitas', 'rice' => 'Brown Rice', 'type' => 'Burrito Bowl',
                "beans" => 'No', 'veggies' => 'Yes', 'toppings' => 'Queso, Guac',
                'special_note' => 'extra meat', 'price' => '$7.95',
                'order_number' => 'SY22222', "customer_id" => '2']
        );

        $order = Order::updateOrCreate(
            ['fill' => 'Steak', 'rice' => 'None', 'type' => 'Hard Shell Taco',
                "beans" => 'Yes', 'veggies' => 'No', 'toppings' => 'Hot Salsa, Cheese',
                'special_note' => 'double shells please', 'price' => '$7.95',
                'order_number' => 'SY33333', "customer_id" => '3']
        );

        $order = Order::updateOrCreate(
            ['fill' => 'Chorizo', 'rice' => 'White Rice', 'type' => 'Soft Shell Taco',
                "beans" => 'No', 'veggies' => 'Yes', 'toppings' => 'Mild Salsa, Queso',
                'special_note' => 'None', 'price' => '$7.95',
                'order_number' => 'SY44444', "customer_id" => '4']
        );

        $order = Order::updateOrCreate(
            ['fill' => 'Barbacoa', 'rice' => 'Brown Rice', 'type' => 'Salad',
                "beans" => 'Yes', 'veggies' => 'No', 'toppings' => 'Hot Salsa, Cheese, Guac, Sour Cream',
                'special_note' => 'extra lettuce', 'price' => '$7.95',
                'order_number' => 'SY55555', "customer_id" => '5']
        );

        $order = Order::updateOrCreate(
            ['fill' => 'Sofritas', 'rice' => 'None', 'type' => 'Burrito',
                "beans" => 'No', 'veggies' => 'Yes', 'toppings' => 'Med Corn Salsa',
                'special_note' => 'to go on the side', 'price' => '$6.50',
                'order_number' => 'SY66666', "customer_id" => '1']
        );
    }
}
