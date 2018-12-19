<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {

        $users = Customer::orderby('created_at', 'desc')->get();

        dump($users->ToArray());

        return view('edit')->with([
            'users' => $users
        ]);
    }

    public function show(Request $request, $id)
    {
        $user = Customer::find($id);

        dump($user->ToArray());

        return view('show')->with([
            'user' => $user
        ]);
    }
}
