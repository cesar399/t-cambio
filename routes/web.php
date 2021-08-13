<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function() {
Route::resource('tipo_cambio', 'App\Http\Controllers\Tipo_cambioController');
});
Route::post('user', 'App\Http\Controllers\api\UserController@index');
require __DIR__.'/auth.php';
