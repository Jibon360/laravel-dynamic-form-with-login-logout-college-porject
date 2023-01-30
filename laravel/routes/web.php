<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('website.pages.login');
// });


Route::controller(AuthController::class)->group(function () {
    Route::get('dashboard','dashboard')->name('dashboard');
    Route::get('/', 'registerpage')->name('registerpage');
    Route::post('registerdata', 'registerdata')->name('register.data');
    Route::get('login/page', 'loginpage')->name('loginpage');
    Route::post('login/data', 'logindata')->name('login.data');
});
