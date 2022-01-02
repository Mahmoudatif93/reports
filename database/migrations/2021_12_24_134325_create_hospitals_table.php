<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('hosname')->nullable();
            $table->string('city')->nullable();
            $table->string('countary')->nullable();
            $table->string('year')->nullable();
            $table->string('month')->nullable();
            $table->string('opd')->nullable();
            $table->string('surgery')->nullable();
            $table->string('iol')->nullable();
            $table->string('phaco')->nullable();
            $table->string('others')->nullable(); //(phaco+iol)-surgery
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
        Schema::dropIfExists('hospitals');
    }
}
