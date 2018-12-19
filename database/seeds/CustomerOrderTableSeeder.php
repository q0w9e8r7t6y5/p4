<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\Order;

class CustomerOrderTableSeeder extends Seeder
{
    public function run() {
    # First, create an array of all the books we want to associate tags with
    # The *key* will be the book title, and the *value* will be an array of tags.
    # Note: purposefully omitting the Harry Potter books to demonstrate untagged books
    $customers =[
        '1' => ['1', '6'],
        '2' => ['2'],
        '3' => ['3'],
        '4' => ['4'],
        '5' => ['5'],
    ];

    # Now loop through the above array, creating a new pivot for each book to tag
    foreach ($customer as $id => $orders) {

        # First get the book
        $customer = Customer::where('id', 'like', $id)->first();

        # Now loop through each tag for this book, adding the pivot
        foreach ($orders as $order) {
            $order = Order::where('id', 'LIKE', $order)->first();

            # Connect this tag to this book
            $customer->customers()->save($order);
        }
}
