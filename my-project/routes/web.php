<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::view('chollos/crear', 'chollos.crear') -> name('crear');
Route::view('inicio', 'inicio') -> name('inicio');
Route::view('Nuevos', 'Nuevos') -> name('nuevos');
Route::view('Destacados', 'Destacados') -> name('destacados');

// Route::view('chollos/crear');
Route::get('chollos', [ PagesController::class, 'listado' ])->name('chollos.listado'); // List
Route::get('chollos/crear', [ PagesController::class, 'crearFormulario' ]) -> name('chollos.crearFormulario'); // Create (Action)
Route::post('chollos', [ PagesController::class, 'crear' ]) -> name('chollos.crear'); // Create (Action)
Route::get('chollos/{id}', [ PagesController::class, 'detalle' ]) -> name('chollos.detalle'); // Read
Route::get('chollos/editar/{id}', [ PagesController::class, 'editar' ]) -> name('chollos.editar'); // Update (Form)
Route::put('chollos/{id}', [ PagesController::class, 'actualizar' ]) -> name('chollos.actualizar'); // Update (Action)
Route::get('chollos/eliminar/{id}', [ PagesController::class, 'eliminarFormulario' ]) -> name('chollos.eliminarFormulario'); // Delete (Form)
Route::delete('chollos/{id}', [ PagesController::class, 'eliminar' ]) -> name('chollos.eliminar'); // Delete (Action)

/*
Route::get('inicio', [PagesController::class, 'inicio']); */
/*
Route::get('chollos', [ PagesController::class, 'chollos' ]);
*/


// CRUD
// C: Form (GET) && Action (POST)
// R: View (GET)
// U: Form (GET[Object]) && Action (PUT/PATCH)
// D: Action (DELETE)