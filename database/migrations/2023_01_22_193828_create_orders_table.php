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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('o_id');
            $table->integer('u_id')->unsigned();
            $table->foreign('u_id')->references('u_id')->on('user_accounts')->onDelete('cascade');
            $table->string('address',400);
            $table->integer('o_amount')->unsigned();
            $table->string('payment_id',100);
            $table->string('o_paymethod');
            $table->string('o_data',50);
            $table->string('delivery_status',10)->default('pending');
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
        Schema::dropIfExists('orders');
    }
};
