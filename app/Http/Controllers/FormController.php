<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Validator;

class FormController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function searchProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone' => 'required|digits:10',
        ]);

        $customer = new Customer();

        $customer->first_name = $request->firstname;
        $customer->last_name = $request-> lastname;
        $customer->email = $request-> email;
        $customer->phone = $request->phone;

        $customer->save();

        return redirect()->action('OrderController@index');
    }
}

