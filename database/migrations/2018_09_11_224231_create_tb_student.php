<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Student', function (Blueprint $table) {
            $table->increments('Id_Student');
            $table->integer('Tb_Plan_Id_Plan')->nullable(false);
            $table->string('Name', 45)->nullable(false);
            $table->string('CPF', 11)->nullable(false);
            $table->string('RG', 9)->nullable(false);
            $table->datetime('Birth')->nullable(false);
            $table->datetime('Registration')->nullable(false);
            $table->string('Telephone', 10)->nullable(false);
            $table->string('CellPhone', 11)->nullable(false);
            $table->string('Objetive', 30)->nullable(false);
            $table->string('Email', 45)->nullable(false);
            $table->string('Password', 20)->nullable(false);
            $table->string('CEP', 8)->nullable(false);
            $table->string('Address', 45)->nullable(false);
            $table->string('Number', 10)->nullable(false);
            $table->string('Complement', 10)->nullable(false);
            $table->string('Neighborhood', 20)->nullable(false);
            $table->string('Country', 20)->nullable(false);
            $table->string('City', 20)->nullable(false);
            $table->char('Status', 1)->nullable(false);
            $table->char('Gender', 1)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Student');
    }
}
