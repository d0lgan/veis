<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedirectTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redirect_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('redirect_id')->index()->unsigned()->nullable();
            $table->foreign('redirect_id')->references('id')->on('redirects');

            $table->integer('tag_id')->index()->unsigned()->nullable();
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::dropIfExists('redirect_tag');
    }
}
