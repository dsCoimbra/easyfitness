<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbEmployee extends Migration
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
            $table->string('Name', 45)->nullable(false)->change();
            $table->string('RG', 9)->nullable(false)->change();
            $table->string('CPF', 11)->nullable(false)->change();
            $table->string('Telephone', 12)->nullable(false)->change();
            $table->dateTime('Birth')->nullable(false)->change();
            $table->string('Cellphone', 13)->nullable(false)->change();
            $table->string('Email', 45)->nullable(false)->change();
            $table->string('PasswordEmployee', 20)->nullable(false)->change();
            $table->char('Function', 1)->nullable(false)->change();
            $table->string('CEP', 9)->nullable(false)->change();
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
        Schema::dropOfExists('Tb_Employee');
    }
}
