<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTrainingHasTbExercise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Training_has_Tb_Exercise', function (Blueprint $table) {
            $table->integer('Tb_Training_has_Tb_Training');
            $table->integer('Tb_Exercise_has_Tb_Exercise');
            $table->integer('Secao')->nullable(false);
            $table->integer('Repeticao')->nullable(false);
            $table->decimal('Carga', 5,2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Training_has_Tb_Exercise');
    }
}
