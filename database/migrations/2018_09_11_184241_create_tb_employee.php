<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Employee', function(Blueprint $table){
            $table->increments('Id_Employee');
            $table->integer('Tb_Academy_Id_Academy');
            $table->string('Name', 45)->nullable(false);
            $table->string('RG', 9)->nullable(false);
            $table->string('CPF', 11)->nullable(false);
            $table->string('Telephone', 12)->nullable(false);
            $table->dateTime('Birth')->nullable(false);
            $table->string('Cellphone', 13)->nullable(false);
            $table->string('Email', 45)->nullable(false);
            $table->string('PasswordEmployee', 20)->nullable(false);
            $table->char('Function', 1)->nullable(false);
            $table->string('CEP', 9)->nullable(false);
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
        Schema::dropIfExists('Tb_Employee');
    }
}
