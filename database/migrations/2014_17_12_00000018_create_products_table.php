<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_ru');
			$table->string('title_uk');
			$table->string('slug_ru')->nullable();
			$table->string('slug_uk')->nullable();

			$table->integer('category_id')->index()->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories');

			$table->string('category_title');

			$table->integer('manufacturer_id')->index()->unsigned()->nullable();
			$table->foreign('manufacturer_id')->references('id')->on('manufacturers');

			$table->integer('stock_id')->index()->unsigned()->nullable();
			$table->foreign('stock_id')->references('id')->on('stocks');

            $table->string('manufacturer_title');

            $table->integer('price');
			$table->integer('undiscounted')->nullable();
			$table->integer('vendor_code');
			$table->integer('ude')->nullable();
			$table->integer('course')->nullable();
			$table->integer('percent')->nullable();
			$table->string('selected_options')->nullable(); //mark
			$table->integer('price_stock')->nullable(); //mark
			$table->integer('sort')->default(0);
			$table->string('lens_height')->nullable();
			$table->string('lens_width')->nullable();
			$table->string('bridge_width')->nullable();
			$table->string('long_arms')->nullable();
			$table->string('frame_width')->nullable();
			$table->string('type_stock')->nullable();
			$table->integer('status_stock')->nullable()->default(0); //mark
			$table->date('start_stock')->nullable()->default(now()); //mark
			$table->date('end_stock')->nullable()->default(now()); //mark
			$table->string('stock')->nullable(); //mark
			$table->integer('availability')->nullable()->default(1);
			$table->string('type')->nullable();
			$table->string('model')->nullable();
			$table->string('supplier')->nullable();
			$table->string('how_size')->nullable();
			$table->string('how_size_ru')->nullable();
			$table->string('how_size_uk')->nullable();
			$table->string('meta_h1_ru')->nullable();
			$table->string('meta_h1_uk')->nullable();
			$table->string('alt')->nullable();
			$table->mediumText('description_ru')->nullable();
			$table->mediumText('description_uk')->nullable();
			$table->string('image')->nullable();
			$table->text('seo')->nullable();
			$table->integer('public')->nullable()->default(1);
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
		Schema::drop('products');
	}

}
