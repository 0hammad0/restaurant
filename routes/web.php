<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, "index"]);
Route::get('/redirects', [HomeController::class, "redirects"]);
Route::get('/users', [AdminController::class, "users"]);
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);
Route::get('/foodmenu', [AdminController::class, "foodmenu"]);
Route::post('/uploadfood', [AdminController::class, "upload"]);
Route::get('/deleteitem/{id}', [AdminController::class, "deleteitem"]);
Route::get('/updateitem/{id}', [AdminController::class, "updateitem"]);
Route::post('/update/{id}', [AdminController::class, "update"]);
Route::post('/reservation', [AdminController::class, "reservation"]);
Route::get('/viewreservation', [AdminController::class, "viewreservation"]);
Route::get('/viewchef', [AdminController::class, "viewchef"]);
Route::post('/updatechef', [AdminController::class, "updatechef"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
