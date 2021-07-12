<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductController;

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
    return view('home.content');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/customer', [CustomerController::class, 'index'])->middleware(['auth']);
Route::get('/products', [ProductController::class, 'index'])->middleware(['auth']);
