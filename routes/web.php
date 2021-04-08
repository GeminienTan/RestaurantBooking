<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FeedbackController;
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

Route::get('/', [ItemController::class,'index']);

Route::get('/user', [UserController::class,'index']);

Route::get('/restaurant', [ItemController::class,'index']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post("addFeedback", [FeedbackController::class, 'store']);

Route::post("updateReservation/{id}", [ReservationController::class, 'update']);
Route::get("deleteReservation/{id}", [ReservationController::class, 'destroy']);

Route::post("updateUser/{id}", [UserController::class, 'update']);
Route::get("deleteUser/{id}", [UserController::class, 'destroy']);
