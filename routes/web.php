<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard.dashboard');
});

Route::prefix('produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
});
