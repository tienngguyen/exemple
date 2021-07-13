<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\OrdersController;

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

Route::get('/index', [HomeController::class, 'index'])->middleware(['auth']);
Route::get('/customer', [CustomersController::class, 'index'])->middleware(['auth']);
Route::get('/product', [ProductsController::class, 'index'])->middleware(['auth']);
Route::get('/category', [CategoriesController::class, 'index'])->middleware(['auth']);
Route::get('/order', [OrdersController::class, 'index'])->middleware(['auth']);
Route::get('/admin', [AdminsController::class, 'index'])->middleware(['auth']);
