<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinyles', function (Blueprint $table) {
            $table->id();
            $table->string('nomAlbum');
            $table->string('artiste');
            $table->string('genre');
            $table->string('sortie');
            $table->decimal('prix', 3, 2);
            $table->integer('dureeSec');
            $table->integer('dureeMin');
            $table->integer('quantite');
            $table->string('dossierImg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinyles');
    }
}
