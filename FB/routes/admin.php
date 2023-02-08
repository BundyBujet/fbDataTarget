<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\ShowUsersController;
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

Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'guest:admin'],function(){
    Route::get('login',[LoginController::class,'get_admin_login'])->name('get.admin.login');
    Route::post('login',[LoginController::class,'login'])->name('admin.login');
});
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'auth:admin'],function(){
    Route::get('/',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');
   
   
    Route::get('showusers',[ShowUsersController::class,'show_users'])->name('admin.show.users');
    Route::post('showusers',[ShowUsersController::class,'search_users'])->name('admin.search.users');
    Route::get('edituser/{id}',[ShowUsersController::class,'edit_users'])->name('admin.deit.users');
    Route::put('edituser/{id}',[ShowUsersController::class,'edit_points_users'])->name('edit_points_users');

    Route::get('showusers/{id}',[ShowUsersController::class,'delete'])->name('admin.delete.users');
});