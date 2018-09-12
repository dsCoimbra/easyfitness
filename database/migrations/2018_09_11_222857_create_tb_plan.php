<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Plan', function (Blueprint $table) {
            $table->increments('Id_Plan');
            $table->integer('Tb_Employee_Id_Employee')->nullable(false);
            $table->string('Name', 20)->nullable(false);
            $table->char('Duration', 1)->nullable(false);
            $table->char('Status', 1)->nullable(false);
            $table->char('TypePayment', 1)->nullable(false);
            $table->dateTime('PayDay')->nullable(false);
            $table->text('Note')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Plan');
    }
}
