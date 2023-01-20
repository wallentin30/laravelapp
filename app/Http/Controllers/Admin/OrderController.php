<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {

        $orders = Order::where('status','0')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function view($id) {

        $orders = Order::where('id', $id)->get();
        return view('admin.orders.view', compact('orders'));
    }

    public function update(Request $request, $id) {

        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();

        return redirect('orders')->with('status', 'Comanda a fost actualizată cu success.');
    }

    public function orderhistory() {

        $orders = Order::where('status','1')->get();

        return view('admin.orders.history', compact('orders'));
    }

}
