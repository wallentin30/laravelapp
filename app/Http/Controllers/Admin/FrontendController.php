<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index() 
    {
        $users = User::all();
        $orders = Order::all();
        $products = Product::all();

        return view('admin.index',compact('users','orders', 'products'));
    }
}
