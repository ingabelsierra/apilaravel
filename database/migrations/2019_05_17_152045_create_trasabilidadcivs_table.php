<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrasabilidadcivsTable extends Migration {

    public function up() {
        Schema::create('trasabilidadcivs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
        });
    }

    public function down() {
        Schema::dropIfExists('trasabilidadcivs');
    }

}
