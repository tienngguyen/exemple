<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//     Route::get('/', 'HomeController@index')->name('home');
// });

Route::get('/dashboard', function () {
    return view('backend.layouts.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::group(['prefix' => 'product','as' => 'product.'], function () {
        Route::get('/',[ProductsController::class, 'index'])->name('index');
        //output: admin/product/
        Route::get('/create',[ProductsController::class, 'update'])->name('create');
        Route::post('/store',[ProductsController::class, 'update'])->name('store');
    });

    Route::group(['prefix' => 'categories','as' => 'categories.'], function () {
        Route::get('/',[CategoriesController::class, 'index'])->name('index');
        //output: admin/categories/
        Route::get('/create',[CategoriesController::class, 'update'])->name('create');
        Route::post('/store',[CategoriesController::class, 'update'])->name('store');
    });

    Route::group(['prefix' => 'customer','as' => 'customer.'], function () {
        Route::get('/',[CustomersController::class, 'index'])->name('index');
        //output: admin/customer/
    });
    
    Route::group(['prefix' => 'orders','as' => 'orders.'], function () {
        Route::get('/',[OrdersController::class, 'index'])->name('index');
        //output: admin/orders/
    });

});