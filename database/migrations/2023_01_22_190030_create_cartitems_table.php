<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartitems', function (Blueprint $table) {
            $table->id('citem_id');
            $table->bigInteger('c_id')->unsigned();
            $table->foreign('c_id')->references('c_id')->on('carts')->onDelete('cascade');
            $table->bigInteger('p_id')->unsigned();
            $table->foreign('p_id')->references('p_id')->on('products')->onDelete('cascade');
            $table->integer('qty')->unsigned();
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
        Schema::dropIfExists('cartitems');
    }
};
