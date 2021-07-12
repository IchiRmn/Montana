<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mountain;
use App\Http\Controllers\MountainController;

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
    return view('index');
});

// Route::get('/cobain', function () {
//     return view('cobain');
// });
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/list', [MountainController::class, 'index']);
Route::get('/mount/{id}', [MountainController::class, 'show']);
Route::get('/regist', function () {
    return redirect('/list');
});
Route::post('/regist', [MountainController::class, 'regist']);


// Route::get('login1', function () {
//     return view('auth.login');
// });

// Route::get('login2', function () {
//     return view('auth.register');
// });