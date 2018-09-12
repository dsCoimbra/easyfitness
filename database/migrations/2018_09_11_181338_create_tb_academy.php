<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbAcademy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Academy', function (Blueprint $table) {
            $table->increments('Id_Academy');
            $table->string('CNPJ', 22)->nullable(false);
            $table->string('Name', 20)->nullable(false);
            $table->string('SocialName', 30)->nullable(false);
            $table->char('Status', 1)->nullable(false);
            $table->string('Token', 30)->nullable(false);
            $table->string('Telephone', 10)->nullable(false);
            $table->string('Site', 30)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Academy');
    }
}
