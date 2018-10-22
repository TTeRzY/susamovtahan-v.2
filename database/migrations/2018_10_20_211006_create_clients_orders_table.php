<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('products', 250)->nullable();
            $table->longText('name', 250)->nullable();
            $table->longText('phone', 250)->nullable();
            $table->longText('email', 250)->nullable();
            $table->longText('city', 250)->nullable();
            $table->longText('address', 250)->nullable();
            $table->longText('message', 250)->nullable();
            $table->float('totalPrice')->nullable();
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
        Schema::dropIfExists('clients_orders');
    }
}
