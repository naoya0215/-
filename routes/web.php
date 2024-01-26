<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\EventController;
use App\Http\Controllers\CalendarController;



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

Route::get('/', [CalendarController::class, 'mount'])->name('calendar');
Route::get('/getNewWeekDates', [CalendarController::class, 'getNewWeekDates']);


Route::middleware('auth:users')->group(function(){
    Route::get('user/home', [HomeController::class, 'index'])->name('home.index');
});


Route::middleware('auth:users')->group(function(){
    Route::resource('events', EventController::class);
});




Route::get('/shop/index', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create');
Route::post('/shop/store', [ShopController::class, 'store'])->name('shop.store');
Route::get('/shop', [ShopController::class, 'edit']);
Route::post('/shop', [ShopController::class, 'update']);
Route::get('/shop', [ShopController::class, 'delete']);


require __DIR__.'/auth.php';