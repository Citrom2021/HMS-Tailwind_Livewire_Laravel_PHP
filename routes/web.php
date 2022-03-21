<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Products;

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

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard'); */

  Route::middleware(['auth:sanctum', 'verified'])->group(function(){
      Route::get('/products', Products::class);
      Route::get('/dashboard', function(){
          return view('dashboard');
      })->name('dashboard');
  });


 Route::get('user/home','App\Http\Controllers\HomeController@UservsAdmin', function(){
 })->middleware('verified');

 /* Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('user/home/products', [ProductController::class, 'store']);
    Route::put('user/home/products/{id}', [ProductController::class, 'update']);
    Route::delete('user/home/products/{id}', [ProductController::class, 'destroy']);
    Route::post('user/home/logout', [AuthController::class, 'logout']);
    Route::get('user/home/products', [ProductController::class, 'index']);
    Route::get('user/home/products/{id}', [ProductController::class, 'show']);
    Route::get('user/home/products/search/{name}', [ProductController::class, 'search']);
 }); */

