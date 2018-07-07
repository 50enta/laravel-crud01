<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Evento;

class EventoController extends Controller {

    public function listar() {
        $eventos = Evento::all();
        return view("listar", compact('eventos'));
    }

    public function registar() {
        return view('registar');
    }

    public function submeter(Request $req) {
        Evento::create($req->all());
       return redirect("/")->with('message', "Sucesso!");
    }

}
