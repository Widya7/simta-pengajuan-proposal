<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\controllerProposal;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('mengajukanproposal', [controllerProposal::class, 'index'])->name('mengajukanproposal')->middleware('auth');
Route::post('mengajukanproposal/upload', [controllerProposal::class, 'simpan'])->name('simpan')->middleware('auth');
// route::get('/mengajukanproposal', function () {
//     return view('mengajukanproposal');
// })->name('mengajukanproposal');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
