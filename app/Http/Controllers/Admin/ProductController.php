<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
  public function index() {
      $products = Product::all();
      return view('admin.product.index', compact('products'));
  }

  public function add() {
      return view('admin.product.add');
  }

  public function insert(Request $request) {
      
    $products = new Product();
    $products->title = $request->input('title');
    $products->price = $request->input('price');
    $products->description = $request->input('description');
    $products->save();
    return redirect('products')->with('status', 'Pachetul a fost adaugat cu succes.');
  }

  public function edit($id) {

    $products = Product::find($id);
    return view('admin.product.edit', compact('products'));

  }

  public function update(Request $request, $id) {
      
    $products = Product::find($id);
    $products->title = $request->input('title');
    $products->price = $request->input('price');
    $products->description = $request->input('description');
    $products->update();
    return redirect('products')->with('status', 'Pachetul a fost modificat cu succes.');
  }

  public function deleteProd($id) {

    $products = Product::find($id);
    $products->delete();
    return redirect('products')->with('status', 'Pachetul a fost sters cu succes.');
  }

}
