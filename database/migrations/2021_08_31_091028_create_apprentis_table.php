<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprentisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissence');
            $table->string('lieu_naissence');
            $table->string('email');
            $table->string('num_tel');
            $table->string('niveau_scolaire');
            $table->unsignedInteger('duree_stage');
            $table->date('periode_de_stage_du');
            $table->date('periode_de_stage_au');
            $table->unsignedInteger('diplome');//
            $table->unsignedInteger('etat_apprenti');//

            $table->string('code_postale')->nullable();
            $table->unsignedInteger('etablisement_formation');//

            

            $table->string('nom_et_prenom_tuteur');

            $table->string('direction');
            $table->string('specialite');

            $table->unsignedInteger('avis');//
            $table->string('observation');


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
        Schema::dropIfExists('apprentis');
    }
}
