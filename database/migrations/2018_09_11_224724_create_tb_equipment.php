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
            $table->increments('Id_Equipment')->nullable(false)->change();
            $table->string('Name')->nullable(false)->change();
            $table->string('Group')->nullable(false)->change();
            $table->datetime('Installation')->nullable(false)->change();
            $table->datetime('Support')->nullable(false)->change();
            $table->integer('QttSupport')->nullable(false)->change();
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
        Schema::dropIfExists('Tb_Equipment');
    }
}
