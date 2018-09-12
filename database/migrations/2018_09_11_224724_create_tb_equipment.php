<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Equipment', function (Blueprint $table) {
            $table->increments('Id_Equipment');
            $table->string('Name',15)->nullable(false);
            $table->string('Group',15)->nullable(false);
            $table->datetime('Installation')->nullable(false);
            $table->datetime('Support')->nullable(false);
            $table->integer('QttSupport')->nullable(false);
            $table->char('Status', 1)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Equipment');
    }
}
