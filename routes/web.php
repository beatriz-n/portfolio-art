<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArteController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\loginController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/', [ArteController::class, 'index']);

//arte
Route::get('/portfolionovo', function () {
    return view('events.portfolionovo');
})->name('portfolionovo')->middleware('auth');

Route::get('/materialnovo', function () {
    return view('events.materialnovo');
})->name('materialnovo')->middleware('auth');

Route::get('/events/materialnovo', [MaterialController::class, 'create'])->middleware('auth');

Route::get('/portfolionovo', [ArteController::class, 'create'])->middleware('auth');

Route::post('/insert', [ArteController::class, 'insert'])->middleware('auth');

Route::get('/admin', [ArteController::class, 'show'])->name('admin')->middleware('auth');

Route::post('/insertMaterial', [MaterialController::class, 'insert'])->middleware('auth');

Route::get('/material', [MaterialController::class, 'show'])->name('material')->middleware('auth');

Route::get('/events/materialeditar/{id}', [MaterialController::class, 'edit'])->name('materialeditar')->middleware('auth');

Route::post('/material/update/{id}', [MaterialController::class, 'update'])->middleware('auth');

Route::get('/material/delete/{id}', [MaterialController::class, 'delete'])->middleware('auth');

Route::post('/arte/update/{id}', [ArteController::class, 'update'])->middleware('auth');

Route::get('/arte/delete/{id}', [ArteController::class, 'delete'])->middleware('auth');

Route::get('/events/portfolioeditar/{id}', [ArteController::class, 'edit'])->name('portfolioeditar')->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');