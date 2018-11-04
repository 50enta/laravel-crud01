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

    public function submeter(Request $req) { //salvarOuActualizar
        $form = $req->all();

        if (!isset($form['id'])) { //É uma inserção
            $evento = new Evento();
            $evento->titulo = $form['titulo'];
            $evento->categoria = $form['categoria'];
            $evento->bilhetes = $form['bilhetes'];

            $evento->save();
            return redirect("/")->with('message', "Sucesso!");
        } else { //É uma actualização
            $evento = Evento::find($form['id']);
            $evento->titulo = $form['titulo'];
            $evento->categoria = $form['categoria'];
            $evento->bilhetes = $form['bilhetes'];

            $evento->save();
            return redirect("/")->with('message', "Sucesso!");
        }
    }
    
    function remover($id) {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect("/")->with('message', "Sucesso!");
    }


    function likar($id){
        $evento = Evento::find($id);
        $evento->likar();
        $this->submeter($evento);
        return redirect("/")->with('message', "Sucesso!");
    }
}
