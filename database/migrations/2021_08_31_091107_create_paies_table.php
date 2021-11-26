<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paies', function (Blueprint $table) {
            $table->unsignedInteger('pointage_id')->unique()->foreign();

            $table->unsignedInteger('agent_id');
            $table->unsignedInteger('apprenti_id');

            $table->integer('paie_de_base');
            $table->integer('pourcentage');
            $table->integer('semester');
            $table->integer('montant');

            
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('apprenti_id')->references('id')->on('apprentis')->onDelete('cascade');
            $table->foreign('pointage_id')->references('id')->on('pointages')->onDelete('cascade');

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
        Schema::dropIfExists('paies');
    }
}
