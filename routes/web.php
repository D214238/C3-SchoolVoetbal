<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//controllers
use App\Http\Controllers\User\UserDashController;

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
//Authentication
require __DIR__.'/auth.php';

//Guest
Route::get('/', function () {
    if(Auth::user() == null) {return view('welcome');}
    if (Auth::user()->is_admin == false) {return redirect()->route('dashboard');}
    elseif (Auth::user()->is_admin == true) {return redirect()->route('admin.dashboard');}
    else {return view('welcome');}
})->name('home');

//User
Route::group(['middleware' => ['auth', 'access:user']], function() {
    Route::get('/dashboard', [UserDashController::class, 'index'])->name('dashboard');

    Route::get('/tournaments', function () {
        return view('user/tournaments');
    })->name('tournaments');

    Route::get('/matches', function () {
        return view('user/matches');
    })->name('matches');

    Route::get('/teams', function () {
        return view('user/teams');
    })->name('teams');
});


//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','access:admin']], function() {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('admin.dashboard');

    Route::get('/tournaments', function () {
        return view('admin/tournaments');
    })->name('admin.tournaments');

    Route::get('/matches', function () {
        return view('admin/matches');
    })->name('admin.matches');

    Route::get('/teams', function () {
        return view('admin/teams');
    })->name('admin.teams');

});

