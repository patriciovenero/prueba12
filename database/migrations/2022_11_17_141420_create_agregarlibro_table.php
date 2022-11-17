<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agregarlibro', function (Blueprint $table) {
            $table->id();
            $table ->string('Nombre');
            $table ->string('Autor');
            $table ->string('Cover');
            $table ->date('fecha_publi');
            $table ->string('Imagen');
            $table ->longblod('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agregarlibro');
    }
};
