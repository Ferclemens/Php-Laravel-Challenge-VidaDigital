<?php
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\SucursalController;
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

// ----GETTERS----
Route::get('empresa/registrar',[EmpresaController::class,'create'])->name('empresa.create');
Route::get('sucursal/registrar',[SucursalController::class,'create'])->name('sucursal.create');
Route::get('empleado/registrar',[EmpleadoController::class,'create'])->name('empleado.create');

Route::get('empresa/listar',[EmpresaController::class,'index'])->name('empresa.index');
Route::get('sucursal/listar',[SucursalController::class,'index'])->name('sucursal.index');
Route::get('empleado/listar',[EmpleadoController::class,'index'])->name('empleado.index');

// ----SETTERS----
Route::post('empresa/guardar',[EmpresaController::class,'store'])->name('empresa.store');
Route::post('sucursal/guardar',[SucursalController::class,'store'])->name('sucursal.store');
Route::post('empleado/guardar',[EmpleadoController::class,'store'])->name('empleado.store');