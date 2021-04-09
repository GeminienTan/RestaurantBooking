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
Route::view('/login', 'login');

Route::get('/', [ItemController::class,'index']);
 
//user
Route::get('/user', [UserController::class,'index']);
Route::post('updateUser/{id}', [UserController::class, 'updateUser']);

Route::get('/restaurant', [ItemController::class,'index']);
 
Auth::routes();
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/food", [ItemController::class, 'showFood']);
Route::get("/beverage", [ItemController::class, 'showBeverage']);
Route::get("/dessert", [ItemController::class, 'showDessert']);

//admin
Route::get('/register/admin',[RegisterController::class,'showAdminRegisterForm']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::get("/feedbackAdmin", [FeedbackController::class, 'showFeedback'])->name('feedbackAdmin');

//feedback CRUD
//Route::post('/addFeedback', [FeedbackController::class, 'store']);
//Route::get('/user', [FeedbackController::class, 'index' ]);

//reservation CRUD
Route::post('/addReservation', [ReservationController::class, 'store']);
Route::get('/user', [ReservationController::class, 'index']);
Route::get("/reservation", [ReservationController::class, 'showReservation'])->name('reservation');
Route::get("deleteReservation/{id}", [ReservationController::class, 'deleteReservation']);
Route::post("updateReservation/{id}", [ReservationController::class, 'updateReservation']);
Route::get("updateReservation/{id}", [ReservationController::class, 'showUpdate']);


Route::get("/item", [ItemController::class, 'showItem'])->name('item');
Route::post("updateItem/{id}", [ItemController::class, 'updateItem']);
Route::get("updateItem/{id}", [ItemController::class, 'showUpdate']);
Route::get("deleteItem/{id}", [ItemController::class, 'deleteItem']);
Route::view("addItem", "addItem");
Route::post("addItem", [ItemController::class, 'addItem']);

//logout
Route::get('logout', [LoginController::class, 'logout']);

Route::get("deleteUser/{id}", [UserController::class, 'deleteUser']);
