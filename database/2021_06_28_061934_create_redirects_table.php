<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedirectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redirects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title_ru')->nullable();
            $table->string('title_uk')->nullable();
            $table->string('meta_h1_ru')->nullable();
            $table->string('meta_h1_uk')->nullable();
            $table->string('slug_ru')->nullable();
            $table->string('slug_uk')->nullable();

            $table->integer('category_id')->index()->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('page')->nullable();
            $table->integer('sail')->nullable();

            $table->text('description_ru')->nullable();
            $table->text('description_uk')->nullable();
            $table->text('seo_ru')->nullable();
            $table->text('seo_uk')->nullable();

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
        Schema::dropIfExists('redirects');
    }
}
