<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id')->autoIncrement();
			$table->integer('site_on_of')->nullable();
			$table->integer('contact_form')->nullable();
			$table->integer('call_form')->nullable();
			$table->integer('slide_home')->nullable();
			$table->integer('shop_buy')->nullable();
			$table->string('phone_site_1')->nullable();
			$table->string('phone_site_2')->nullable();
			$table->string('phone_site_3')->nullable();
			$table->string('phone_site_4')->nullable();
			$table->string('point_issues')->nullable();
			$table->string('point_deliveries')->nullable();
			$table->integer('free_shipping')->nullable();
			$table->integer('universal')->nullable();
			$table->integer('categories')->nullable();
			$table->integer('brands')->nullable();
			$table->integer('viewed')->nullable();

			//RU
			$table->string('address_site_ru')->nullable();
			$table->string('email_site_ru')->nullable();
			$table->string('name_company_ru')->nullable();
			$table->string('country_ru')->nullable();

			// UA
			$table->string('address_site_uk')->nullable();
			$table->string('email_site_uk')->nullable();
			$table->string('name_company_uk')->nullable();
			$table->string('country_uk')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}
