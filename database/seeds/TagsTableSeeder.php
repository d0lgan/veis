<?php

use Illuminate\Database\Seeder;
use \App\Tag;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('tags')->delete();

        Tag::insert([
            [
                'name_ru' => 'Зима',
                'name_uk' => 'Зiма',
                'slug_ru' => '',
                'slug_uk' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_ru' => 'Весна',
                'name_uk' => 'Вiсна',
                'slug_ru' => '',
                'slug_uk' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_ru' => 'Лето',
                'name_uk' => 'Лiто',
                'slug_ru' => '',
                'slug_uk' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_ru' => 'Осень',
                'name_uk' => 'Осiнь',
                'slug_ru' => '',
                'slug_uk' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
        
    }
}