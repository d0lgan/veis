<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValueOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_options', function (Blueprint $table) {
            $table->increments('id');

            $table->string('value_ru')->nullable()->default(null);
            $table->string('value_uk')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('sorting')->nullable()->default('0');

            $table->integer('option_id')->index()->unsigned()->nullable();
            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');

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
        Schema::dropIfExists('value_options');
    }
}
