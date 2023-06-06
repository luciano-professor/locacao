<?php

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
});

//Rota para o componente full page do Livewire
Route::get('/carros', Carros::class);
Route::get('/carros/criar', CarrosForm::class);

// Route::get('/carros', function () {
//     return view('admin.carros');
// });
