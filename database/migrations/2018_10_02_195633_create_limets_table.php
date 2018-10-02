<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLimetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('limets_image')->nullable();
            $table->longText('limets_title', 250)->nullable();
            $table->text('limets_price')->nullable();
            $table->longText('limets_info', 250)->nullable();
            $table->longText('limets_more_info', 250)->nullable();
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
        Schema::dropIfExists('limets');
    }
}
