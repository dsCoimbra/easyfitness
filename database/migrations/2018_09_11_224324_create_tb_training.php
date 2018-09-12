<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTraining extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Training', function (Blueprint $table) {
            $table->increments('Id_Training');
            $table->integer('Tb_Employee_Id_Employee')->nullable(false);
            $table->text('DescriptionTraining')->nullable(false);
            $table->char('StatusTraining')->nullable(false);
            $table->integer('Tb_Student_Id_Student')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Training');
    }
}
