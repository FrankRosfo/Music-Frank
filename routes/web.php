<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\GeneralController;

/*
|--------------------------------------------------------------------------
| Rutas Raiz
|--------------------------------------------------------------------------
|
| Rutas para redirigir al login
|
*/

Route::get('/', [GeneralController::class, 'raiz'])->name('raiz');

/*
|--------------------------------------------------------------------------
| Rutas de Login y Registro
|--------------------------------------------------------------------------
|
| Rutas para generar el login y registro de usuarios.
|
*/

Route::post('/registro', [RegisterController::class, 'guardar'])->name('registro.guardar');

Route::post('/login', [SessionController::class, 'ingresar'])->name('login.ingresar');

Route::get('/registro', [RegisterController::class, 'create'])->middleware('guest')->name('registro');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

/*
|--------------------------------------------------------------------------
| Rutas del sitio
|--------------------------------------------------------------------------
|
| Rutas para navegar por el sitio
|
*/

Route::get('/api', [ComentariosController::class, 'api'])->middleware('auth')->name('api');

Route::get('/inicio', [GeneralController::class, 'inicio'])->middleware('auth')->name('inicio');

Route::get('/contacto', function () {
    return view('contact');
})->middleware('auth')->name('contacto');

/*
|--------------------------------------------------------------------------
| Rutas del correo
|--------------------------------------------------------------------------
|
| Rutas para enviar correos a los usuarios.
|
*/

Route::post('/mail', [MailController::class, 'getMail']);