<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
    return view('site.app');
});

Route::get('logout', function ()
{
    Auth::logout();
    return redirect('/');    
})->name('logout');

Route::get('profile', function () {
    return view('form.profile');
});

Route::get('services', function () {
    return view('form.services');
});

Route::get('dados', function () {
    return view('form.dados');
});

Route::get('habilidades', function () {
    return view('form.habilidades');
});



Route::get('/t/{id}', function ($id) {
    return "$id+$id";
});

Route::get('/teste/{nome}', [App\Http\Controllers\TesteController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
