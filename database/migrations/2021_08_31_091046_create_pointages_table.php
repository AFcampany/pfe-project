<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('agent_id');
            $table->unsignedInteger('apprenti_id');

            $table->unsignedInteger('nbr_absence');
            $table->date('period');
            
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('apprenti_id')->references('id')->on('apprentis')->onDelete('cascade');

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
        Schema::dropIfExists('pointages');
    }
}
