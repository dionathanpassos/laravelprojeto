<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_services', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->decimal('price', 10,2);
            $table->string('time');
            $table->unsignedBigInteger('from_user_id');
            $table->foreign('from_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('to_user_id');
            $table->foreign('to_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('order_services');
    }
}
