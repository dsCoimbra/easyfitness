<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPhysicalassessment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_PhysicalAssessment', function (Blueprint $table) {
            $table->increments('Id_PhysicalAssessment');
            $table->integer('Tb_Employee_Id_Employee')->nullable(false);
            $table->integer('Tb_Performance_Id_Performance')->nullable(false);
            $table->decimal('BloodPressure')->nullable(false);
            $table->decimal('HeartRate')->nullable(false);
            $table->decimal('BodyMass')->nullable(false)->change('');
            $table->decimal('Structure')->nullable(false);
            $table->decimal('RCQ')->nullable(false);
            $table->decimal('IMC')->nullable(false);
            $table->decimal('Chest')->nullable(false);
            $table->decimal('Waist')->nullable(false);
            $table->decimal('Hip')->nullable(false);
            $table->decimal('Abdomen')->nullable(false);
            $table->decimal('RightForearm')->nullable(false);
            $table->decimal('LeftForearm')->nullable(false);
            $table->decimal('LeftThigh')->nullable(false);
            $table->decimal('RightThigh')->nullable(false);
            $table->decimal('LeftCalf')->nullable(false);
            $table->decimal('RightCalf')->nullable(false);
            $table->decimal('Subscapular')->nullable(false);
            $table->decimal('Triciptal')->nullable(false);
            $table->decimal('Breastplate')->nullable(false);
            $table->decimal('CurrentFat')->nullable(false);
            $table->decimal('AxillaryMedia')->nullable(false);
            $table->decimal('SupraIliaca')->nullable(false);
            $table->decimal('Abdominal')->nullable(false);
            $table->decimal('Thigh')->nullable(false);
            $table->decimal('FatWeight')->nullable(false);
            $table->decimal('LeanWeight')->nullable(false);
            $table->decimal('Fist')->nullable(false);
            $table->decimal('Buttocks')->nullable(false);
            $table->decimal('AbdomenBBQ')->nullable(false);
            $table->decimal('CurrentFatBBQ')->nullable(false);
            $table->decimal('FatWeightBBQ')->nullable(false);
            $table->decimal('LeanWeightBBQ')->nullable(false);
            $table->decimal('VO2')->nullable(false);
            $table->char('Classification', 1)->nullable(false);
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
        Schema::dropIfExists('Tb_PhysicalAssessment');
    }
}
