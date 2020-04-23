<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsbestosRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asbestos_records', function (Blueprint $table) {
            $table->increments('asbestosID');
            $table->integer('premisesID');
            $table->string('location');
            $table->string('product');
            $table->string('area');
            $table->string('surfaceCoating');
            $table->string('asbestosCondition');
            $table->string('accessibility');
            $table->integer('asbestosType');
            $table->string('comments');
            $table->integer('materialScore');
            $table->integer('priorityScore');
            $table->string('action');
            $table->date('actionDate');
            $table->string('userID');
            $table->string('orgName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asbestos_records');
    }
}
