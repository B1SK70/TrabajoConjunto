<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request){
        
        $mensaje = "hola";
        Mail::to('ismaeliessonferrer@gmail.com')->send(new Maileable($mensaje));
        return view('mensajeRecibido');
    }
}
