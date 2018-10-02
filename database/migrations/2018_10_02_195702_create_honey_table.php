<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('honey', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('honey_image')->nullable();
            $table->longText('honey_title', 250)->nullable();
            $table->text('honey_price')->nullable();
            $table->longText('honey_info', 250)->nullable();
            $table->longText('honey_more_info', 250)->nullable();
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
        Schema::dropIfExists('honey');
    }
}
