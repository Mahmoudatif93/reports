<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sno')->nullable();
            $table->string('type')->nullable();//search year countary spon camp_team
            $table->string('compno')->nullable();
            $table->string('year')->nullable();
            $table->string('date')->nullable();
            $table->string('city')->nullable();
            $table->string('cuntary')->nullable();
            $table->string('opd')->nullable();
            $table->string('surg')->nullable();
            $table->string('iol')->nullable();
            $table->string('phaco')->nullable();
            $table->string('glasses')->nullable();
            $table->string('med_tablet')->nullable();
            $table->string('med_drops')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo_date')->nullable();
            $table->string('vedio')->nullable();
            $table->string('vedio_date')->nullable();
            $table->string('camp_team')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('sponsors')->nullable();
            $table->string('medicalreport')->nullable();///file pdf or img
            $table->string('staticreport')->nullable();///file pdf or img
            $table->string('finalreport')->nullable();///file pdf or img
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
        Schema::dropIfExists('camps');
    }
}
