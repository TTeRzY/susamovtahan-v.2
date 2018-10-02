<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSesameOilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesame_oil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('sesame_oil_image')->nullable();
            $table->longText('sesame_oil_title', 250)->nullable();
            $table->text('sesame_oil_price')->nullable();
            $table->longText('sesame_oil_info', 250)->nullable();
            $table->longText('sesame_oil_more_info', 250)->nullable();
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
        Schema::dropIfExists('sesame_oil');
    }
}
