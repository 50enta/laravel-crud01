<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $fillable = [
        'id', 'apagado', 'titulo', 'categoria', 'bilhetes'
    ];

    function likar(){
    	$this->likes++;
    }
}
