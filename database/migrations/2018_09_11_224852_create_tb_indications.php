<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbIndications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Indications', function (Blueprint $table) {
            $table->increments('Id_Indications');
            $table->integer('Tb_PhysicalAssessment_Id_PhysicalAssessment')->nullable(false);
            $table->boolean('RML')->nullable(false);
            $table->boolean('Aerobic')->nullable(false);
            $table->boolean('Bodybuilding')->nullable(false);
            $table->boolean('Medex')->nullable(false);
            $table->boolean('Abdominal')->nullable(false);
            $table->boolean('UpHill')->nullable(false);
            $table->text('Comment')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Indications');
    }
}
