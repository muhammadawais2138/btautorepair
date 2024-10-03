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
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('gallery_id');
            $table->string('picture_name')->nullable();
            $table->string('picture_page_url')->nullable();
            $table->string('picture')->nullable();
            $table->string('page_title')->nullable();
            $table->string('page_keywords')->nullable();
            $table->string('page_description')->nullable();
            $table->timestamps(); // Correct usage of timestamps() method
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery');
    }
};
