<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dateOfBirth');
            $table->date('dateOfInjury');
            $table->date('dateOfAssessment');
            $table->string('gender');
            $table->string('phone');
            $table->float('height');
            $table->float('weight');
            $table->integer('doctor_id');
            $table->integer('bloodPressureS');
            $table->integer('bloodPressureD');
            $table->integer('heartRate');
            $table->integer('neckFlexion');
            $table->integer('neckExtension');
            $table->integer('elbowFlexion');
            $table->integer('elbowExtension');
            $table->float('gripStrengthL1');
            $table->float('gripStrengthL2');
            $table->float('gripStrengthL3');
            $table->float('gripStrengthR1');
            $table->float('gripStrengthR2');
            $table->float('gripStrengthR3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
