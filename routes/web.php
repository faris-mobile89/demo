<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;

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
Route::get('/user/{id}/account', [APIController::class, 'account']);

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Route::get('profile', [EmployeeController::class])->name('profile');

Route::resource('profile', EmployeeController::class);

//Route::post('profile', [EmployeeController::class]);

Route::get('/forms-elements', function () {
    return view('forms-elements');
});


Route::get('/users-profile', function () {
    return view('users-profile');
});
