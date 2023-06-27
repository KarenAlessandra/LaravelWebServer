<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//cake store
Route::get('/', [JobController::class, 'index']);

Route::get('/login', [JobController::class, 'login']);
Route::get('/register', [JobController::class, 'register']);
Route::get('/register_admin', [JobController::class, 'register_admin']);
Route::get('/about_us', [JobController::class, 'about_us']);
Route::get('/contact_us', [JobController::class, 'contact_us']);
Route::get('/products', [JobController::class, 'products']);
Route::get('/checkout', [JobController::class, 'checkout']);
Route::get('/perfil', [JobController::class, 'perfil']);
Route::get('/register_cake', [JobController::class, 'register_cake']);
Route::get('/orders', [JobController::class, 'orders']);