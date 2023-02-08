<?php

use App\Http\Controllers\User\GetDataController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\PasswordController;
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
    return view('welcome');
})->name('welcom');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace'=>'User','prefix'=>'user','middleware'=>'auth:web'],function(){
    
  Route::get('getdata', [GetDataController::class, 'get_data'])->name('user.getdata');
  Route::post('getdata/{id}',[GetDataController::class,'find_data'])->name('find.data');

  Route::get('profile', [ProfileController::class, 'edit'])->name('user.editprofile');
  Route::post('profile/{id}', [ProfileController::class, 'update'])->name('user.updateprofile');

  Route::put('password', [PasswordController::class, 'update'])->name('password.update');
});