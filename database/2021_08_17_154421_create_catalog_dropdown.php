<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogDropdown extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_dropdown', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru')->nullable();
            $table->string('title_uk')->nullable();
            $table->string('link_ru')->nullable();
            $table->string('link_uk')->nullable();

            $table->integer('at_home')->default(0);

            $table->integer('category_id')->index()->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('sort')->nullable();
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
        Schema::drop('catalog_dropdown');
    }
}
