<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {return redirect('login');});
Auth::routes();

Route::get('/prueba', function()
{
    return view('user.index');
});

Route::resource('/products', ProductController::class)->names('products');
Route::resource('/orders', OrderController::class)->names('orders');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

