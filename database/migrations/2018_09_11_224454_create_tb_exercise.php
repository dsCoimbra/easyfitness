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
            $table->string('Name')->nullable(false)->change();
            $table->char('BodyPart')->nullable(false)->change();
            $table->text('Description')->nullable(false)->change();
            $table->char('Status')->nullable(false)->change();
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
