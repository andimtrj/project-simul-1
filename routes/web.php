<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [AuthController::class, 'home'])->name('home');

Route::get('/view', function () {
    return view('view');
});

Route::get('/home', [DocumentController::class, 'showAll'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login-process', [AuthController::class, "loginProcess"])->name('loginProcess');

Route::get('/register', [AuthController::class, "register"])->name('register');

Route::post('/register-process', [AuthController::class, "registerProcess"])->name('registerProcess');

Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::get('/upload', [DocumentController::class, 'uploadPage'])->name('uploadpage');
Route::post('/upload', [DocumentController::class, 'upload'])->name('uploadfile');

Route::get('/version/{id}', [DocumentController::class, 'versionPage'])->name('versionpage');

Route::get('/update/{id}', [DocumentController::class, 'updatePage'])->name('updatepage');
Route::post('/update/{id}', [DocumentController::class, 'update'])->name('updatefile');

Route::delete('/delete/{id}', [DocumentController::class, 'delete'])->name('delete');