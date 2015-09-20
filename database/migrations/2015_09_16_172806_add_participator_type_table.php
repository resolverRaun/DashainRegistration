<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParticipatorTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('participant_id')->default(0)->nullable();
            $table->integer('adult')->default(0)->nullable();
            $table->integer('children')->default(0)->nullable();
            $table->integer('senior')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participants');
    }
}
