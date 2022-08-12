<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {
    return view('layout.master');
})->name('/');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');
Route::get('/product',[ProductController::class, 'productClient'])->name('product');
Route::get('/cart', function () {
    return view('client.cart');
})->name('cart');

Route::get('/productDetail', function () {
    return view('client.product-detail');
})->name('productDetail');


Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/listUser', [UserController::class, 'index'])->name('listUser'); //name: users.list
    Route::delete('/deleteUser/{user}', [UserController::class, 'deleteUser'] )->name('deleteUser');
    Route::get('/createUser', [UserController::class, 'createUser'])->name('createUser');
    Route::post('/storeUser', [UserController::class, 'storeUser'])->name('storeUser');
    Route::get('/editUser/{user}', [UserController::class, 'editUser'])->name('editUser');
    Route::put('/updateUser/{user}', [UserController::class, 'updateUser'])->name('updateUser');
//middleware('checkadmin')->

});
Route::middleware('auth')->get('/auth/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('/admin')->name('admin.')->group(function (){
    // Route::get('/user', [UserController::class, 'index'])->name('list'); //name: users.list
    // Route::delete('/delete/{user}', [UserController::class, 'delete'] )->name('delete');
    // Route::get('/create', [UserController::class, 'create'])->name('create');
    // Route::post('/store', [UserController::class, 'store'])->name('store');
    // Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    // Route::put('/update/{user}', [UserController::class, 'update'])->name('update');


    Route::get('/product', [ProductController::class, 'index'])->name('list');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::delete('/delete/{product}', [ProductController::class, 'delete'] )->name('delete');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');

    // Route::post('/admin/media/{media}', 'Admin\MediaController@completedUpdate')->name('completedUpdate');
});


// Login chỉ được vào khi người dùng chưa đăng nhập -> middleware('guest')
Route::prefix('/auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'postSignup'])->name('postSignup');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


});
