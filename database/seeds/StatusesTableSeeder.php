<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Обработка',
                'public' => true,
                'created_at' => '2018-04-22 13:22:35',
                'updated_at' => '2018-04-22 13:22:38',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'В работе',
                'public' => true,
                'created_at' => '2018-04-22 13:22:35',
                'updated_at' => '2018-04-22 13:22:39',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Выполнен',
                'public' => true,
                'created_at' => '2018-04-22 13:22:36',
                'updated_at' => '2018-04-22 13:22:40',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Отменен',
                'public' => true,
                'created_at' => '2018-04-22 13:22:37',
                'updated_at' => '2018-04-22 13:22:41',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Оплачен',
                'public' => true,
                'created_at' => '2018-05-09 20:29:50',
                'updated_at' => '2018-05-09 20:29:52',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Отгружен',
                'public' => true,
                'created_at' => '2018-05-19 21:47:58',
                'updated_at' => '2018-05-19 21:47:59',
            ),
        ));
        
        
    }
}