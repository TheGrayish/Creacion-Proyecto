<?php

use App\Models\Contacto;
use Illuminate\Http\Request;
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

Route::get('/contacto/{tipo?}', function ($tipo = null) {
    //existe $tipo
    return view('contacto',compact('tipo'));
    //->with(['tipo' => $tipo]);    //se pueden utilizar cualquiera de las 2 compact o este
});


Route::post('/validar-contacto', function (Request $request) {
    $contacto = new Contacto();
    $contacto->correo = $request->correo;
    $contacto->comentario = $request->comentario;
    $contacto ->save();
    
    return redirect()->back();
});
