<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_values', function (Blueprint $table) {
            $table->increments('id');

//            $table->string('need_option')->nullable();
//            $table->string('value_option')->nullable();
            $table->string('price_option')->nullable();
            $table->string('operation_option')->nullable();

            $table->integer('value_option_id')->index()->unsigned()->nullable();
            $table->foreign('value_option_id')->references('id')->on('value_options')->onDelete('set null');

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
        Schema::dropIfExists('product_values');
    }
}
