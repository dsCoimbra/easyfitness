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
            $table->intenger('Tb_Employee_Id_Employee')->nullable(false)->change();
            $table->intenger('Tb_Student_Id_Student')->nullable(false)->change();
            $table->text('BodyText')->nullable(false)->change();
            $table->char('TypeComment')->nullable(false)->change();
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
