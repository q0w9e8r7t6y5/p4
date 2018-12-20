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

        return view('edit')->with([
            'users' => $users
        ]);
    }

    public function show(Request $request, $id)
    {
        $user = Customer::find($id);

        return view('show')->with([
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $user = Customer::find($id);

        if (!$user) {
            return redirect('/edit')->with([
                'alert' => 'User not found.'
            ]);
        }

        return view('edituser')->with([
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
        ]);

        $user = Customer::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect('/edit/'.$id.'');
    }

    public function delete($id)
    {
        $user = Customer::find($id);

        return view('delete')->with([
            'user' => $user,
        ]);
    }

    public function destroy($id)
    {
        $user = Customer::find($id);

        if($user!=null){
            $user->orders()->detach();

            //delete orders
            $orders=Order::where('customer_id',$user->id);
            $orders->delete();

            //delete user
            $user->delete();

        }

        return redirect('edit');
    }
}
