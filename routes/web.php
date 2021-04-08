<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AdminLoginController;
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
//     // return view('welcome');
//     $data=array(['name' => 'Faruk Haidar','role'=> 'web designer'],['name' => 'Faruk Haidar','role'=> 'web designer']);
//     return testMy('role',$data);
// });



// Route::get('/admin', [AdminController::class, 'index']);

// Route::get('admin/user', [AdminController::class, 'uindex']);
// Route::get('admin/user/add', [AdminController::class, 'add']);
// Route::get('admin/user/edit/{id}', [AdminController::class, 'edit']);
// Route::get('admin/user/view/{id}', [AdminController::class, 'view']);
// Route::post('admin/user/submit', [AdminController::class, 'insert']);
// Route::post('admin/user/update', [AdminController::class, 'update']);



Route::get('admin/login', [AdminLoginController::class, 'create'])->name('admin.login');
Route::post('admin/login', [AdminLoginController::class, 'authenticate']);
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

Route::resource('admins', AdminController::class);
Route::resource('users', UserController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

route::get('test',[TestController::class, 'test']);
require __DIR__.'/auth.php';
