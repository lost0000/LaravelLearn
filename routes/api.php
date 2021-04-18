<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::group(['middleware' => 'api'], function () {

//     Route::auth();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');


Route::get('/shop',  [ShopController::class, 'jsondata'])->name('index');
Route::post('/shop',  [ShopController::class, 'addtocart'])->name('index');


Route::get('/cart',  [CartController::class, 'cartdata'])->name('cartindex');
// });