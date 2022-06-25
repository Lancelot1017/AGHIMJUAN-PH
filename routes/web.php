<?php

use App\Http\Controllers\AdminController;
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
    return view('user-page.welcome');
});

Route::get('/admin', 'AdminController@index');
Route::get('/admin/home', 'AdminController@home');
Route::get('/admin/projects', 'AdminController@viewProjects');
Route::post('/admin/store', 'AdminController@store');
Route::post('/admin/update/{id}', 'AdminController@update');
Route::get('/admin/delete/{id}', 'AdminController@delete');
Route::get('/admin/settings', 'AdminController@settings');
Route::get('/admin/users', 'AdminController@users');
Route::get('/login', 'AdminController@login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
