<?php

use App\Http\Controllers\CompanyoneController;
use App\Http\Controllers\CompanytwoController;
use App\Http\Controllers\CompanythreeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\RoleController;
use App\Http\Controllers\SuperAdmin\PermissionController;
use App\Http\Controllers\SuperAdmin\IndexController;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

// Route::post('/login/post', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('superadmin.')->prefix('superadmin')->group(function(){
    Route::resource('/', IndexController::class);
    Route::resource('/roles', RoleController::class);
    Route::post('roles/{role}/permissions',[RoleController::class,'givePermission'])->name('roles.permission');
    Route::delete('roles/{role}/permissions/{permission}',[RoleController::class,'revokePermissions'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
});

Route::resource('companyone',CompanyoneController::class);
Route::resource('companytwo',CompanytwoController::class);;
Route::resource('companythree',CompanythreeController::class);;

Route::resource('user',UserController::class);
