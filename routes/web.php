<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mountain;
use App\Http\Controllers\MountainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistController;


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

Route::get('/admin', [AdminController::class, 'index'])->middleware('role:1');

Route::get('/list', [MountainController::class, 'index']);
Route::get('/mount/{id}', [MountainController::class, 'show']);
Route::post('/regist', [MountainController::class, 'regist'])->middleware('auth');
Route::get('/regist', function () {
    return redirect('/list');
});

Route::post('/inputRegist', [RegistController::class, 'input']);

Route::get(
    '/cobain',
    function () {
        return view('mountain.draft');
    }
);
// Route::get('login1', function () {
//     return view('auth.login');
// });

// Route::get('login2', function () {
//     return view('auth.register');
// });