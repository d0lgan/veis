<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Оплата по реквизитам',
                'class_checkout' => 'nalozka',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Наличными при получении',
                'class_checkout' => 'bank',
            ),
        ));
        
        
    }
}