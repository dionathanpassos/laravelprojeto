<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderServicesCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_services_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_services_id');
            $table->foreign('category_services_id')->references('id')->on('category_services');
            $table->unsignedBigInteger('order_services_id');
            $table->foreign('order_services_id')->references('id')->on('order_services');                        
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
        //
    }
}
