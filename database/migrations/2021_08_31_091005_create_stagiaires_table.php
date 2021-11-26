<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',35);
            $table->string('prenom');
            $table->date('date_naissence');
            $table->string('lieu_naissence');
            $table->string('email');
            $table->string('niveau_scolaire');
            $table->unsignedInteger('duree_stage');
            $table->date('periode_de_stage_du');
            $table->date('periode_de_stage_au',);
            $table->string('diplome');
            $table->integer('etat_stagiaire');
            
            $table->string('nom_et_prenom_tuteur');
            
            $table->string('direction');
            $table->string('specialite');
            $table->string('theme');

            $table->string('attestation')->nullable();
            $table->string('pdf')->nullable();


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
        Schema::dropIfExists('stagiaires');
    }
}
