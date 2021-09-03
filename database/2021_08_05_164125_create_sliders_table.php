<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title_ru');
            $table->string('title_uk');
            $table->string('button_ru')->nullable();
            $table->string('button_uk')->nullable();

            $table->string('link')->nullable();

            $table->string('additional_button_ru')->nullable();
            $table->string('additional_button_uk')->nullable();

            $table->string('additional_link')->nullable();
            $table->string('color')->nullable();
            $table->string('image')->nullable();

            $table->text('description_ru')->nullable();
            $table->text('description_uk')->nullable();

            $table->integer('sort');
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

        Schema::dropIfExists('sliders');
    }
}
