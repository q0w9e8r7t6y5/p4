<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Customer::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'first_name' => 'Jill', 'last_name' => 'Harvard',
               "phone" => '8571112222']
            );

        $user = Customer::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'first_name' => 'Jamal', 'last_name' => 'Harvard',
                "phone" => '8573334444']
        );

        $user = Customer::updateOrCreate(
            ['email' => 'john@harvard.edu', 'first_name' => 'John', 'last_name' => 'Harvard',
                "phone" => '8575556666']
        );

        $user = Customer::updateOrCreate(
            ['email' => 'jane@harvard.edu', 'first_name' => 'Jane', 'last_name' => 'Harvard',
                "phone" => '8577778888']
        );

        $user = Customer::updateOrCreate(
            ['email' => 'jack@harvard.edu', 'first_name' => 'Jack', 'last_name' => 'Harvard',
                "phone" => '8579990000']
        );

        $user = Customer::updateOrCreate(
            ['email' => 'jamie@harvard.edu', 'first_name' => 'Jamie', 'last_name' => 'Harvard',
                "phone" => '8570001111']
        );
    }
}
