<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoneyArrange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_arrange', function ($table) {
            $table->increments('id');
            $table->integer('hundred');
            $table->integer('fifty');
            $table->integer('twenty');
            $table->integer('ten');
            $table->integer('one');
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
        $table->drop_column('money_arrange');
    }
}
