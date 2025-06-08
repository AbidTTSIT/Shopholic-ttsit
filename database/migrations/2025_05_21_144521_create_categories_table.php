<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // unsignedBigInteger primary key
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('category_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('path'); // image path
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_images');
        Schema::dropIfExists('categories');
    }
}
