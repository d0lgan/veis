<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site_on_of' => 0,
                'contact_form' => 1,
                'call_form' => 1,
                'slide_home' => 1,
                'shop_buy' => 1,
                'phone_site_1' => '0939141417',
                'phone_site_2' => '0669141417',
                'phone_site_3' => '0669141417',
                'phone_site_4' => '0669141417',
	            'point_issues' => 1,
	            'point_deliveries' => 1,
                'free_shipping' => 0,
                'universal' => 1,
                'categories' => 1,
                'brands' => 1,
                'viewed' => 1,

                // RU
                'address_site_ru' => 'Черкассы, Б.Вишнивецкого, 2',
                'email_site_ru' => 'mail@mail.com',
                'name_company_ru' => 'VEIS Company',
                'country_ru' => 'Украина',

                // UA
                'address_site_uk' => 'Черкаси, Б.Вишневецького, 2',
                'email_site_uk' => 'mail@mail.com',
                'name_company_uk' => 'VEIS Company',
                'country_uk' => 'Україна',

            ),
        ));
        
        
    }
}