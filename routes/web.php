<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//controllers
use App\Http\Controllers\User\UserDashController;
use App\Http\Controllers\Admin\AdminDashController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;
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
//Authentication
require __DIR__.'/auth.php';

//Guest
Route::get('/', function () {
    if(Auth::user() == null) {return view('public.welcome');}
    if (Auth::user()->is('user')) {return redirect()->route('dashboard.index');}
    elseif (Auth::user()->is('admin')) {return redirect()->route('admin.dashboard.index');}
    else {return view('public.welcome');}
})->name('home');

//User
Route::group(['middleware' => ['auth', 'is:user']], function() {
    Route::get('/dashboard', [UserDashController::class, 'index'])->name('dashboard.index');
});

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','is:admin']], function() {
    Route::get('/dashboard', [AdminDashController::class, 'index'])->name('admin.dashboard.index');
});

//resource controllers users
Route::group(['middleware' => ['auth','is:user']], function() {
    Route::resources([
        'tournaments' => TournamentController::class,
        'teams' => TeamController::class,
        'games' => GameController::class,
        'users' => UserController::class
    ]);
});

//resource controllers admins (more for aesthetic purposes. gives nicer url)
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is:admin']], function() {
    Route::resources([
        'tournaments' => TournamentController::class,
        'teams' => TeamController::class,
        'games' => GameController::class,
        'users' => UserController::class
    ], ['as' => 'admin']);
});

Route::get('/teams/{id}', [TeamController::class, 'edit'])->name('teams.edit');
