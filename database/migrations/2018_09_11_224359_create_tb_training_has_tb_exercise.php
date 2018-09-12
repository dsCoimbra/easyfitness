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
            $table->integer('Secao', 5)->nullable(false)->change();
            $table->integer('Repeticao', 5)->nullable(false)->change();
            $table->decimal('Carga', 5,2)->nullable(false)->change();
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
