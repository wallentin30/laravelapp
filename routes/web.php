<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\FrontendController as AdminFrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|   App\Http\Controllers\
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index']);
Route::post('/contact-form',[ContactController::class, 'contact'])->name('form.contact');

#user
Route::middleware(['auth'])->group(function () {
    
    Route::get('checkout/{id}', [CheckoutController::class, 'index']);
    Route::post('checkout', [CheckoutController::class, 'stripePost'])->name('stripe.post');    

    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('view-order/{id}', [UserController::class, 'view']);
    
    Route::get('profile', [UserController::class, 'profile']);
    Route::put('profile/{id}', [UserController::class, 'update']);
});


 Auth::routes();

 Route::get('/home', [HomeController::class, 'index'])->name('home');

 #admin
Route::middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', 'Admin\FrontendController@index')->name('dashboard');
    
    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-product', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);

    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'deleteProd']);

    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'update']);
    Route::get('order-history', [OrderController::class, 'orderhistory']);

    Route::get('users', [MembersController::class, 'users']);


 });

