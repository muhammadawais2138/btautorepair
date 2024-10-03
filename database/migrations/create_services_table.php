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
        Schema::create('services', function (Blueprint $table) {
            $table->increments('service_id');
            $table->string('services')->nullable();
            $table->string('service_page_url')->nullable();
              $table->string('picture')->nullable();
            $table->longText('details')->nullable();
            $table->longText('extra_detail')->nullable();
            $table->string('page_title')->nullable();
            $table->string('page_keywords')->nullable();
            $table->string('page_description');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
