<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CvPublicController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\CvController;

/*
|--------------------------------------------------------------------------
| HOME (pública)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| CONTACTO (público) - guarda mensajes
|--------------------------------------------------------------------------
*/
Route::post('/contacto', [HomeController::class, 'storeContact'])
    ->name('contact.store');

/*
|--------------------------------------------------------------------------
| CV (público) - descarga el último CV
|--------------------------------------------------------------------------
*/
Route::get('/cv/latest', [CvPublicController::class, 'downloadLatest'])
    ->name('cv.download.latest');

/*
|--------------------------------------------------------------------------
| DASHBOARD (Breeze)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| PERFIL (Breeze)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN (Mensajes + CVs)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Mensajes de contacto
        Route::get('/mensajes', [ContactMessageController::class, 'index'])
            ->name('messages.index');

        Route::get('/mensajes/{contactMessage}', [ContactMessageController::class, 'show'])
            ->name('messages.show');

        // CVs
        Route::get('/cvs', [CvController::class, 'index'])
            ->name('cvs.index');

        Route::get('/cvs/{cv}/descargar', [CvController::class, 'download'])
            ->name('cvs.download');
    });

require __DIR__.'/auth.php';