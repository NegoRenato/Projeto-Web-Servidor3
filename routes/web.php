<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\EscolaController;

    Route::get('/', [EscolaController::class, 'index']);
    Route::get('/cadastrar/aluno', [EscolaController::class, 'cadastrarAluno']);
    Route::get('/login/aluno', [EscolaController::class, 'acessarLoginAluno']);

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/area-do-aluno', function () {
            return view('pagina_segura_aluno');
        })->name('dashboard');
    });

require __DIR__.'/settings.php';
