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
            $table->date('dateOfInjury')->nullable();
            $table->date('dateOfAssessment')->nullable();
            $table->string('gender');
            $table->string('phone');
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->integer('doctor_id');
            $table->integer('bloodPressureS')->nullable();
            $table->integer('bloodPressureD')->nullable();
            $table->integer('heartRate')->nullable();
            $table->integer('neckFlexion')->nullable();
            $table->integer('neckExtension')->nullable();
            $table->integer('elbowFlexion')->nullable();
            $table->integer('elbowExtension')->nullable();
            $table->float('gripStrengthL1')->nullable();
            $table->float('gripStrengthL2')->nullable();
            $table->float('gripStrengthL3')->nullable();
            $table->float('gripStrengthR1')->nullable();
            $table->float('gripStrengthR2')->nullable();
            $table->float('gripStrengthR3')->nullable();
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
