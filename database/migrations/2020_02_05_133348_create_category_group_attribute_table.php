<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryGroupAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_group_attribute', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();

            $table->integer('category_id')->index()->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('group_attribute_id')->index()->unsigned()->nullable();
            $table->foreign('group_attribute_id')->references('id')->on('group_attributes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_group_attribute');
    }
}
