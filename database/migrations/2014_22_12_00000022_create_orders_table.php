<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
			$table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('delivery')->nullable();
			$table->string('city')->nullable();
			$table->string('type')->nullable();
			$table->string('status')->nullable();
			$table->boolean('confirm')->nullable();
			$table->string('warehouse')->nullable();
			$table->string('comment')->nullable();
			$table->string('products')->nullable();
			$table->string('total')->nullable();
			$table->string('region')->nullable();
			$table->integer('new')->nullable();


			/*$table->integer('user_id')->index()->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('status_id')->index()->unsigned()->nullable();
			$table->foreign('status_id')->references('id')->on('statuses');

			$table->integer('payment_id')->index()->unsigned()->nullable();
			$table->foreign('payment_id')->references('id')->on('payments');

			$table->string('type', 50)->nullable();
			$table->text('cart')->nullable();*/
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
		Schema::drop('orders');
	}

}
