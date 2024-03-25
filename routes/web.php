<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [LoginController::class, 'logout']);


Route::controller(UserController::class)
    ->middleware('auth')
    ->prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}/update', 'update')->name('update');
        Route::post('/', 'store')->name('store');
        Route::post('/{id}/generate-password', 'generatePassword')->name('generate-password');
        Route::post('/{id}/change-password', 'changePassword')->name('change-password');
        Route::post('/{id}/create-password', 'createPassword')->name('create-password');
        Route::delete('/{id}', 'delete')->name('delete');
    });

Route::controller(RoleController::class)
    ->prefix('roles')
    ->middleware('auth')
    ->as('roles.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::post('/permission', 'add_permission')->name('add-permission');
        Route::post('/permission/{role_id}/grant', 'grant_permission')->name('grant-permission');
    });

Route::controller(ClientController::class)
    ->middleware('auth')
    ->prefix('clients')
    ->as('clients.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');

    });
