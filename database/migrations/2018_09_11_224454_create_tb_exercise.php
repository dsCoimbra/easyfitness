<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbExercise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Exercise', function (Blueprint $table) {
            $table->increments('Id_Exercise');
            $table->string('Name')->nullable(false);
            $table->char('BodyPart')->nullable(false);
            $table->text('Description')->nullable(false);
            $table->char('Status')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Exercise');
    }
}
