<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbExerciseHasTbEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Exercise_has_Tb_Equipment', function (Blueprint $table) {
            $table->integer('Tb_Exercise_Id_Exercise');
            $table->integer('Tb_Equipment_Id_Equipment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Exercise_has_Tb_Equipment');
    }
}
