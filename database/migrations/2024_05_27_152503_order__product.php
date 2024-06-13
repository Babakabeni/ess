<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_product', function (Blueprint $tabble){
            $tabble->id();
            $tabble->unsignedBigInteger('order_id');
            $tabble->unsignedBigInteger('product_id');
            $tabble->integer('total_quantity');
            $tabble->integer('total_price');

            $tabble->foreign('order_id')->references('id')->on('orders');
            $tabble->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
