<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Middleware\AdminMiddleware;

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

Route::get('/home', [AuthController::class, 'home'])->name('home')->middleware('isAdmin');
Route::get('/homeUser', [AuthController::class, 'homeUser'])->name('homeUser');

Route::get('/view', function () {
    return view('view');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/home', [DocumentController::class, 'showAll'])->name('home')->middleware('isAdmin');
Route::get('/homeUser', [DocumentController::class, 'showAllUser'])->name('homeUser');

Route::get('/sort-Title-admin',[DocumentController::class, 'sortTitleAdmin'])->name('sortAdmin');
Route::get('/sort-Title-user',[DocumentController::class, 'sortTitleUser'])->name('sortUser');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login-process', [AuthController::class, "loginProcess"])->name('loginProcess');

Route::get('/register', [AuthController::class, "register"])->name('register');

Route::post('/register-process', [AuthController::class, "registerProcess"])->name('registerProcess');

Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/upload', [DocumentController::class, 'uploadPage'])->name('uploadpage');
    Route::post('/upload', [DocumentController::class, 'upload'])->name('uploadfile');
    Route::get('/update/{id}', [DocumentController::class, 'updatePage'])->name('updatepage');
    Route::post('/update/{id}', [DocumentController::class, 'update'])->name('updatefile');
    Route::delete('/delete/{id}', [DocumentController::class, 'delete'])->name('delete');
    Route::get('/homeAdmin/search-process', [DocumentController::class, "searchProcessAdmin"])->name('searchProcessAdmin');
    Route::get('/view/{id}', [DocumentController::class, 'versionPageAdmin'])->name('versionpageAdmin');
});

Route::get('/home/search-process', [DocumentController::class, "searchProcess"])->name('searchProcess');


Route::get('/viewuser/{id}', [DocumentController::class, 'versionPage'])->name('versionpage');
Route::get('/download/{id}', [DocumentController::class, 'downloaddoc'])->name('downloaddoc');





