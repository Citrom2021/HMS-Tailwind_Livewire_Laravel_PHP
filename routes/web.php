<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminvsUserWebController;
use App\Http\Controllers\UserProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Products;
use App\Http\Livewire\UserProducts;
use App\Http\Livewire\Transactions;
use App\Http\Livewire\UserTransactions;
use App\Http\Controllers\SearchController;
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

//email-verifikáció route

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// / -> index
Route::get('/', function () {
    return view('index');
});

// home-index
Route::get('/index', function () {
    return view('index');
});

Route::get('/search',[SearchController::class, 'search'])->name('web.search');
Route::get('/find',[SearchController::class, 'find'])->name('web.find');

// Sanctum és admin protected routes

  Route::middleware(['auth:sanctum', 'verified'])->group(function(){
      Route::get('/products', Products::class);
      Route::get('/transactions', Transactions::class);
      Route::get('/restaurantandbar', UserProducts::class); 
      Route::get('/my-bookings', UserTransactions::class);
      Route::get('/dashboard', function(){
          return view('dashboard');
      })->name('dashboard');
  });

  
// Admin vs user middleware protected route for different views
 Route::get('user/home','App\Http\Controllers\HomeController@UservsAdmin', function(){
 })->middleware('verified');

 // Admin middleware protected routes
 Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/products', Products::class);
    Route::get('/transactions', Transactions::class);
    
});

// Raw Json format all product on the weben
Route::get('/jsonproducts', [ProductController::class, 'index']);

