<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\User\ShowAddress;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

Route::get('users', [UserController::class, 'list'])
    ->name('get.users');


Route::get('users/{id?}', [\App\Http\Controllers\User\ProfileController::class, 'show'])
    ->name('get.user.profile');

// Route::get('users/{id}/address', [App\Http\Controllers\User\ShowAddressController::class, 'showAddress']);


Route::get('users/{id}/address', ShowAddress::class)
    ->where(['id' => '[0-9]+']);


// Route::resource('games', GameController::class);
Route::resource('games', GameController::class)
    ->only([
        'index', 'show'
    ]);


