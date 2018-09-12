<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Comment', function (Blueprint $table) {
            $table->increments('Id_Comment');
            $table->integer('Tb_Employee_Id_Employee')->nullable(false);
            $table->integer('Tb_Student_Id_Student')->nullable(false);
            $table->text('BodyText')->nullable(false);
            $table->char('TypeComment')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Comment');
    }
}
