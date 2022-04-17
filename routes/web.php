<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AdminvsUserWebController;
use App\Http\Controllers\UserProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Products;
use App\Http\Livewire\UserProducts;
use App\Http\Livewire\Transactions;
use App\Http\Livewire\UserTransactions;
use App\Http\Livewire\Users;
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
    Route::get('/users', Users::class);
    Route::get('routes', function () {
        $routeCollection = Route::getRoutes();
    
        echo "<table style='width:100%'>";
        echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='10%'><h4>Name</h4></td>";
        echo "<td width='70%'><h4>Corresponding Action</h4></td>";
        
        
        echo "</tr>";
        foreach ($routeCollection as $value) {
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" . $value->uri() . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
            
            
            echo "</tr>";
        }
        echo "</table>";
    });

    /* Route::get('routes', function() {
        \Artisan::call('route:list');
        return \Artisan::output();
   }); */

   Route::get('routestocsv', function()
{
    header('Content-Type: application/excel');
    header('Content-Disposition: attachment; filename="routes.csv"');
 
    $routes = Route::getRoutes();
    $fp = fopen('php://output', 'w');
    fputcsv($fp, ['METHOD', 'URI', 'NAME', 'ACTION']);
    foreach ($routes as $route) {
        fputcsv($fp, [head($route->methods()) , $route->uri(), $route->getName(), $route->getActionName()]);
    }
    fclose($fp);
});
    
});

// Raw Json format all product on the weben
Route::get('/jsonproducts', [ProductController::class, 'index']);

