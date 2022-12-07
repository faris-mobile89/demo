<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\DashboardController;

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

Route::get('/user/{id}/checkIn', [APIController::class, 'checkIn']);
Route::get('/user/{id}/checkOut', [APIController::class, 'checkOut']);


Route::get('/', [DashboardController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/forms-elements', function () {
    return view('forms-elements');
});


Route::get('/users-profile', function () {
    return view('users-profile');
});
