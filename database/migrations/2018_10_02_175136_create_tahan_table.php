<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('tahan_image')->nullable();
            $table->longText('tahan_title', 250)->nullable();
            $table->text('tahan_price')->nullable();
            $table->longText('tahan_info', 250)->nullable();
            $table->longText('tahan_more_info', 250)->nullable();
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
        Schema::dropIfExists('tahan');
    }
}
