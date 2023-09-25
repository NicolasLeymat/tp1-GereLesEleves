<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;

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
    return view('index');
});
Route::get('/ajoutEleve', function () {
    return view('ajoutEleve');
});
Route::get('/ajoutEleve/create', [EleveController::class, 'create'])->name('EleveController.create');
Route::post('/', [EleveController::class, 'store'])->name('EleveController.store');