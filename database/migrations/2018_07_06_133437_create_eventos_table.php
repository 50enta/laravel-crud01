<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('eventos', function (Blueprint $table) {
//            'id', 'apagado', 'titulo', 'categoria', 'bilhetes'
            $table->increments('id');
            $table->string('apagado')->default("Não");
            $table->string('titulo');
            $table->string('categoria');
            $table->integer('bilhetes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('eventos');
    }

}
