<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('model')->nullable();
            $table->string('size')->nullable();
            $table->string('lumens')->nullable();
            $table->string('power')->nullable();
            $table->string('led_chip')->nullable();
            $table->string('input_voltage')->nullable();
            $table->string('spec')->nullable();
            $table->string('color_temp')->nullable();
            $table->string('cri')->nullable();
            $table->string('driver')->nullable();
            $table->string('quality_warranty')->nullable();
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
        Schema::dropIfExists('product_detail');
    }
}
