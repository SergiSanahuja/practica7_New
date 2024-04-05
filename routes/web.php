<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TusArticulosController;
use App\Http\Controllers\CrearArticulo;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::apiResource("/TusArticulos", TusArticulosController::class);
Route::get('/TusArticulos', [TusArticulosController::class, 'index'])
    ->name('TusArticulos');



Route::get('CrearArticulo', [CrearArticulo::class, 'create'])
            ->name('CrearArticulo');

Route::post('CrearArticulo', [CrearArticulo::class, 'store']);

// Route::apiResource('/CrearArticulo', CrearArticulo::class);

Route::get('Profile', function () {
    return view('profile');
})->name('profile');

Route::post('Profile', [ProfileController::class, 'update'])->name('profile.update');

//middleware('auth') -> per a que només pugui accedir si està autenticat
Route::post('editar/{id}', [CrearArticulo::class, 'update'])->name('editar');

Route::get('Eliminar/{id}', [CrearArticulo::class, 'destroy'])->name('Eliminar');

Route::apiResource("/home", HomeController::class);
require __DIR__.'/auth.php';



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
