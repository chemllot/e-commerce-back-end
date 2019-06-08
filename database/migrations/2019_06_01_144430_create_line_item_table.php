<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_item', function (Blueprint $table) {
            $table->unsignedInteger('ProductsId');
            $table->unsignedInteger('OrderId');

            $table->increments('id');
            $table->foreign('ProductsId')
                ->references('ProductsId')
                ->on('products');
            $table->foreign('orderId')
                ->references('orderId')
                ->on('order');
            $table->integer('Quantity');
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
        Schema::dropIfExists('line_item');
    }
}
