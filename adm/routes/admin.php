<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCateoryController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\FaturamentoController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['role:admin'])->group(function(){
        Route::resource('user',UserController::class);
        Route::resource('role',RoleController::class);
        Route::resource('permission',PermissionController::class);
        Route::resource('category',CategoryController::class);
        Route::resource('subcategory',SubCateoryController::class);
        Route::resource('collection',CollectionController::class);
        Route::resource('product',ProductController::class);
        Route::get('/get/subcategory',[ProductController::class,'getsubcategory'])->name('getsubcategory');
        Route::get('/remove-external-img/{id}',[ProductController::class,'removeImage'])->name('remove.image');

        // Rotas para Pacientes
        Route::resource('pacientes', PacienteController::class);

        // Rotas para Médicos
        Route::resource('medicos', MedicoController::class);

        // Rotas para Salas
        Route::resource('salas', SalaController::class);

        // Rotas para Consultas
        Route::resource('consultas', ConsultaController::class);
        Route::get('/consultas/hoje', [ConsultaController::class, 'hoje'])->name('consultas.hoje');
        Route::get('/consultas/mes', [ConsultaController::class, 'mes'])->name('consultas.mes');
        Route::get('/consultas/espera', [ConsultaController::class, 'espera'])->name('consultas.espera');
        Route::get('/consultas/relatorio', [ConsultaController::class, 'relatorio'])->name('consultas.relatorio');

        // Rotas para Convênios
        Route::resource('convenios', ConvenioController::class);
        Route::get('/convenios/delete', [ConvenioController::class, 'delete'])->name('convenios.delete');

        // Rotas para Faturamento
        Route::get('/faturamento', [FaturamentoController::class, 'index'])->name('faturamento.index');
        Route::get('/faturamento/laboratorio', [FaturamentoController::class, 'laboratorio'])->name('faturamento.laboratorio');
    });
});
