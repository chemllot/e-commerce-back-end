<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('delivery_id');
            $table->increments('orderId');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('delivery_id')
                ->references('deliveryId')
                ->on('delivery_list');
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
        Schema::dropIfExists('order');
    }
}
