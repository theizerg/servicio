<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiosReinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dios_reina', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nb_nombres');
            $table->string('nb_apellidos');
            $table->string('nu_cedula');
            $table->string('nro_familia');
            $table->string('nro_familia_edificio');
            $table->string('nu_edad');
            $table->string('fe_nacimiento');
            $table->integer('identificacion_id')->unsigned();
            $table->foreign('identificacion_id')->references('id')->on('tipo_identificacion');

            $table->integer('nacionalidad_id')->unsigned();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidad');

            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('genero');

            $table->integer('parentezco_id')->unsigned();
            $table->foreign('parentezco_id')->references('id')->on('parentezco');

            $table->integer('edificio_id')->unsigned();
            $table->foreign('edificio_id')->references('id')->on('edificio');

            $table->integer('estado_civil_id')->unsigned();
            $table->foreign('estado_civil_id')->references('id')->on('estado_civil');
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->smallInteger('benf_bono_patria');
            $table->smallInteger('benf_bolsas_clap');
            $table->smallInteger('benf_hogares_patria');
            $table->smallInteger('benf_bolsas_nutricion');
            $table->smallInteger('benf_estado_desnutricion');
            $table->smallInteger('benf_bombonas_gas');
            $table->string('nb_nota')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('dios_reina');
    }
}
