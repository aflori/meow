<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//next 2 import were removed with breeze install
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeowController;


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

// next route were removed on breeze install
// Route::get('/', [HomeController::class, 'show']);
Route::get('/meows', [MeowController::class, 'index']);
Route::get('/meow/{meow}', [MeowController::class, 'show']);
Route::post('/meow', [MeowController::class, 'create']);
Route::put('/meow', [MeowController::class, 'edit']);
Route::patch('/meow/{meow}', [MeowController::class, 'update']);
Route::delete('/meow/{meow}', [MeowController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
