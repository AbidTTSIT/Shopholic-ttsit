<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id(); // unsignedBigInteger primary key
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('brand_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->string('path'); // image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('brand_images');
        Schema::dropIfExists('brands');
    }
}
