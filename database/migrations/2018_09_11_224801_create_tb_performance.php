<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPerformance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Performance', function (Blueprint $table) {
            $table->increments('Id_Performance');
            $table->integer('Tb_Student_Id_Student')->nullable(false)->change();
            $table->decimal('Weight', 5,2)->nullable(false)->change();
            $table->datetime('DatePerformance')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Performance');
    }
}
