<?php

namespace App\Http\Controllers\Frontend;

use Stripe;
use Stripe\Charge;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Frontend\FrontendController;


class CheckoutController extends Controller
{
    
    public function index($id) {

        $products = Product::findOrFail($id);
         
        return view('user.checkout', compact('products'));
    }
   
   
    public function stripePost(Request $request)
    {
        $products = Product::findOrFail($request->input('product_id'));
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
                
                "amount" =>  $products->price * 100,
                "currency" => "ron",
                "source" => $request->stripeToken,
                "description" => "Plată pachet de mentenanță."
        ]);
        
        
        $order = new Order();
        $order->user_id = Auth::id();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->title = $request->input('title');
        $order->price = $request->input('price');
        $order->note = $request->input('note');
        $order->tracking = rand(1,9999);
        $order->save();        

        OrderItems::create([
            'order_id' => $order->id,
            'prod_id' => $products->id,
            'price' => $products->price,
        ]);

        if(Auth::user()->name == NULL) {
            $user = User::where('id', Auth::id());
            $user->title = $request->input('title');
            $user->price = $request->input('price');
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->note = $request->input('note');
            $order->update();
        }
         
        $request->session()->put('session', 'Comanda ta a fost plasată,  îți mulțumim ca ai apelat la serviciile noastre.Te vom contacta în cel mai scurt timp posibil.');
        return redirect('/');
           
    }


}



