<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Importando o componente carros
use App\Http\Livewire\Admin\Carros\Carros;
use App\Http\Livewire\Admin\Carros\CarrosForm;

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
    return view('inicial');
})->middleware('auth');

//Rota para o componente full page do Livewire
Route::get('/carros', Carros::class);
Route::get('/carros/criar', CarrosForm::class);
Route::get('/carros/{carro}/editar', CarrosForm::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
