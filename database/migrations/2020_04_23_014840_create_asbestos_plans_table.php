<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsbestosPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asbestos_plans', function (Blueprint $table) {
            $table->increments('planID');
            $table->integer('premisesID');
            $table->date('creationDate');
            $table->date('monitorDate');
            $table->integer('userID');
            $table->string('commPlan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asbestos_plans');
    }
}
