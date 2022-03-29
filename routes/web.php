<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminvsUserWebController;
use App\Http\Controllers\UserProductsController;
use App\Http\Livewire\Products;
use App\Http\Livewire\UserProducts;
use App\Http\Livewire\Transactions;
use Inertia\Inertia;

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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard'); */

  Route::middleware(['auth:sanctum', 'verified'])->group(function(){
      Route::get('/products', Products::class);
      Route::get('/transactions', Transactions::class);
      Route::get('/restaurantandbar', UserProducts::class); 
        Route::get('/dashboard', function(){
          return view('dashboard');
      })->name('dashboard');
  });

 /*  Route::get('/restaurantandbar',function(){
        return view('livewire.restaurantandbar');
    })->name('livewire.restaurantandbar'); */

 Route::get('user/home','App\Http\Controllers\HomeController@UservsAdmin', function(){
 })->middleware('verified');

 Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/products', Products::class);
    Route::get('/transactions', Transactions::class);
    
});

/* Route::get('/restaurantandbar','App\Http\Controllers\AdminvsUserWebController@UserProductAdminProduct', function(){
})->middleware('verified'); */
 

