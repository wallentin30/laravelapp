<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {

        $index_products = Product::all();
        return view('user.index', compact('index_products'));

    }
}
