<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('link')->nullable();
            $table->string('exchange')->default('off')->nullable();
            $table->string('add_new_products')->default('off')->nullable();
            $table->string('update_new_products')->default('off')->nullable();
            $table->string('overwrite_products')->default('off')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
