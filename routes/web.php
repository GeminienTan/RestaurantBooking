<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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
 
//register admin
Route::get('/register/admin',[RegisterController::class,'showAdminRegisterForm']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);

//crud reservation
Route::post('/addReservation',[ReservationController::class,'store']);

//crud feedback
Route::post('/addFeedback',[FeedbackController::class,'store']);


//feedback CRUD
Route::post('/addFeedback', [FeedbackController::class, 'store']);

//logout
Route::get('logout', [LoginController::class, 'logout']);
