<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = Order::updateOrCreate(
            ['fill' => 'Chicken', 'rice' => 'White Rice', 'type' => 'Burrito',
                "beans" => 'Yes', 'veggies' => 'Yes', 'toppings' => 'None',
                'special_note' => 'tortilla on the side please', 'price' => '$7.95',
                'order_number' => 'SY1111', "customer_id" => '1']
        );
    }
}
