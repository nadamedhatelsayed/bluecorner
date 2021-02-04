<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{


    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('images');
    }
}
