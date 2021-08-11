<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('com_text')->nullable();
			$table->string('name')->nullable();

			$table->integer('status_id')->index()->unsigned()->nullable();
			$table->foreign('status_id')->references('id')->on('statuses');

			$table->string('email')->nullable();

			$table->integer('user_id')->index()->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('order_id')->index()->unsigned()->nullable();
			$table->foreign('order_id')->references('id')->on('orders');

			$table->integer('product_id')->index()->unsigned()->nullable();
			$table->foreign('product_id')->references('id')->on('products');

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
		Schema::drop('comments');
	}

}
