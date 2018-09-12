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
            $table->integer('Tb_Plan_Id_Plan')->nullable(false)->change();
            $table->string('Name', 45)->nullable(false)->change();
            $table->string('CPF', 11)->nullable(false)->change();
            $table->string('RG', 9)->nullable(false)->change();
            $table->datetime('Birth')->nullable(false)->change();
            $table->datetime('Registration')->nullable(false)->change();
            $table->string('Telephone', 10)->nullable(false)->change();
            $table->string('CellPhone', 11)->nullable(false)->change();
            $table->string('Objetive', 30)->nullable(false)->change();
            $table->string('Email', 45)->nullable(false)->change();
            $table->string('Password', 20)->nullable(false)->change();
            $table->string('CEP', 8)->nullable(false)->change();
            $table->string('Address', 45)->nullable(false)->change();
            $table->string('Number', 10)->nullable(false)->change();
            $table->string('Complement', 10)->nullable(false)->change();
            $table->string('Neighborhood', 20)->nullable(false)->change();
            $table->string('Country', 20)->nullable(false)->change();
            $table->string('City', 20)->nullable(false)->change();
            $table->char('Status', 1)->nullable(false)->change();
            $table->char('Gender', 1)->nullable(false)->change();
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
