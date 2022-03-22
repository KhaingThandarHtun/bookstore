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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('author')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('publisher')->nullable();
            $table->integer('publishing_time')->nullable();
            $table->string('cover_image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('qty')->nullable();
            $table->string('published_date')->nullable();
            $table->string('promotion_discount')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('books');
    }
};
