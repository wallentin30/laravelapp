<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {

        $orders = Order::where('user_id', Auth::id())->get();
        return view('user.orders.index', compact('orders'));
    }


    public function view($id) {

        $orders = Order::where('user_id', Auth::id())->get();
        return view('user.orders.index', compact('orders'));
    }


    public function profile() {
        $users = User::where('id', Auth::id())->get();
        return view('user.profile', compact('users'));
    }


    public function update(Request $request, $id) {
      
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->update();

        $request->session()->put('session', 'Datele tale au fost modificate cu succes.');
        
        return redirect('/home');
      }

}
