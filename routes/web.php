<?php

use App\Http\Controllers\golfClubController;
use App\Http\Controllers\pageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [pageController::class, 'home'])->name('home');
    



Route::get('/clubs', [golfClubController::class, 'index']);
Route::get('/clubs/create', [golfClubController::class, 'create']);
Route::post('/clubs', [golfClubController::class, 'store']);

//Line to create route to every function in the golfclubs resource controller
Route::resource('/clubs', golfClubController::class) -> middleware(['auth']);


  


