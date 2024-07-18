<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArteController;
use App\Http\Controllers\MaterialController;

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

Route::get('/', function () {
    return view('welcome');
});

//arte
Route::get('/portfolionovo', function () {
    return view('events.portfolionovo');
})->name('portfolionovo');

Route::get('/materialnovo', function () {
    return view('events.materialnovo');
})->name('materialnovo');

Route::get('/events/materialnovo', [MaterialController::class, 'create'])->middleware('auth');

Route::get('/portfolionovo', [ArteController::class, 'create']);

Route::post('/insert', [ArteController::class, 'insert']);

Route::get('/admin', [ArteController::class, 'show'])->name('admin');

Route::post('/insertMaterial', [MaterialController::class, 'insert']);

Route::get('/material', [MaterialController::class, 'show'])->name('material');

Route::get('/events/materialeditar/{id}', [MaterialController::class, 'edit'])->name('materialeditar');

Route::post('/material/update/{id}', [MaterialController::class, 'update']);

Route::get('/material/delete/{id}', [MaterialController::class, 'delete']);

Route::post('/arte/update/{id}', [ArteController::class, 'update']);

Route::get('/arte/delete/{id}', [ArteController::class, 'delete']);

Route::get('/events/portfolioeditar/{id}', [ArteController::class, 'edit'])->name('portfolioeditar');

