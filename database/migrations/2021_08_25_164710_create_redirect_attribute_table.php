<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedirectAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redirect_attribute', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();

            $table->integer('redirect_id')->index()->unsigned()->nullable();
            $table->foreign('redirect_id')->references('id')->on('redirects');

            $table->integer('attribute_id')->index()->unsigned()->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redirect_attribute');
    }
}
