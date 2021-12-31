<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
//     return view('index');
// });

Route::get('/', [CrudController::class, 'index']);
Route::get('/read', [CrudController::class, 'read'])->middleware('auth');
Route::get('/create', [CrudController::class, 'create'])->middleware('auth');
Route::get('/store', [CrudController::class, 'store']);
Route::get('/show/{id}', [CrudController::class, 'show'])->middleware('auth');
Route::get('/update/{id}', [CrudController::class, 'update']);
Route::get('/destroy/{id}', [CrudController::class, 'destroy'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
