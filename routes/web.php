<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\EscolaController;

    Route::get('/', [EscolaController::class, 'index']);
    Route::get('/cadastrar/aluno', [EscolaController::class, 'cadastrarAluno']);
    Route::get('/login/aluno', [EscolaController::class, 'acessarLoginAluno']);
    Route::post('/cadastrar/aluno', [EscolaController::class, 'salvarAluno']);
    Route::post('/login/aluno', [EscolaController::class, 'logarAluno']);

require __DIR__.'/settings.php';
