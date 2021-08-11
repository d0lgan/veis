<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Product;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('orders')->delete();


    	\DB::table('orders')->insert(array(

    		0 => array(

    			'name' => 'OrderTest',
                'surname' => 'OrderSurname',
                'delivery' => 'pickup',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
    			'status' => 'Оплачен',
                'confirm' => 0,
    			'total' => '12345',
                'products' => json_encode(array( 0 => array( 'product' => 1, 'count' => 1, 'currentPrice' => null, 'selected_options' => array( '1' => '1', '2' => '11' ) ))),
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    		),

    		1 => array(

    			'name' => 'OrderTest',
                'surname' => 'OrderSurname',
                'delivery' => 'pickup',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
    			'status' => 'Оплачен',
                'confirm' => 0,
    			'total' => '12345',
                'products' => json_encode(array( 0 => array( 'product' => 1, 'count' => 1, 'currentPrice' => null, 'selected_options' => array( '1' => '1', '2' => '11' ) ))),
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    		),

    		2 => array(

    			'name' => 'OrderTest',
                'surname' => 'OrderSurname',
                'delivery' => 'pickup',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
    			'status' => 'Оплачен',
                'confirm' => 0,
    			'total' => '12345',
                'products' => json_encode(array( 0 => array( 'product' => 1, 'count' => 1, 'currentPrice' => null, 'selected_options' => array( '1' => '1', '2' => '11' ) ))),
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    		),

    		3 => array(

    			'name' => 'OrderTest',
                'surname' => 'OrderSurname',
                'delivery' => 'pickup',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
    			'status' => 'Оплачен',
                'confirm' => 0,
    			'total' => '12345',
                'products' => json_encode(array( 0 => array( 'product' => 1, 'count' => 1, 'currentPrice' => null, 'selected_options' => array( '1' => '1', '2' => '11' ) ))),
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    		),

    		4 => array(

    			'name' => 'OrderTest',
                'surname' => 'OrderSurname',
                'delivery' => 'pickup',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
    			'status' => 'Оплачен',
                'confirm' => 0,
    			'total' => '12345',
                'products' => json_encode(array( 0 => array( 'product' => 1, 'count' => 1, 'currentPrice' => null, 'selected_options' => array( '1' => '1', '2' => '11' ) ))),
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    		),

    		5 => array(

    			'name' => 'OrderTest',
                'surname' => 'OrderSurname',
                'delivery' => 'pickup',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
    			'status' => 'Оплачен',
                'confirm' => 0,
    			'total' => '12345',
                'products' => json_encode(array( 0 => array( 'product' => 1, 'count' => 1, 'currentPrice' => null, 'selected_options' => array( '1' => '1', '2' => '11' ) ))),
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    		),

    		6 => array(

    			'name' => 'OrderTest',
                'surname' => 'OrderSurname',
                'delivery' => 'pickup',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
    			'status' => 'Оплачен',
                'confirm' => 0,
    			'total' => '12345',
                'products' => json_encode(array( 0 => array( 'product' => 1, 'count' => 1, 'currentPrice' => null, 'selected_options' => array( '1' => '1', '2' => '11' ) ))),
    			'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

    		),

    	));
        
    }
}