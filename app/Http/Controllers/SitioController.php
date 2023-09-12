<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;


class SitioController extends Controller
{
    public function contactoForm($tipo = null)
    {
        return view('contacto',compact('tipo'));
    }

    public function contactoSave(Request $request)
    {
            $request->validate([
            
            'comentario'=>['required','min:5','max:50'],
            'correo'=>'required|email',
           ]);
           
            $contacto = new Contacto();
            $contacto->correo = $request->correo;
            $contacto->comentario = $request->comentario;
            $contacto ->save();
            
            return redirect()->back();
    }

}

