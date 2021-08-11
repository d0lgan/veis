<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'title_ru' => 'Женские перчатки',
                'title_uk' => 'Женские перчатки',
                'meta_h1_ru' => 'Женские перчатки',
                'meta_h1_uk' => 'Женские перчатки',
                'slug_ru' => 'zhenskie-perchatki',
                'slug_uk' => 'zhenskie-perchatki',
                'description_ru' => 'Женские перчатки',
                'description_uk' => 'Женские перчатки',
                'seo' => NULL,
                'image' => 'zhenskie-perchatki.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'title_ru' => 'Мужские перчатки',
                'title_uk' => 'Мужские перчатки',
                'meta_h1_ru' => 'Мужские перчатки',
                'meta_h1_uk' => 'Мужские перчатки',
                'slug_ru' => 'muzhskie-perchatki',
                'slug_uk' => 'muzhskie-perchatki',
                'description_ru' => 'Мужские перчатки',
                'description_uk' => 'Мужские перчатки',
                'seo' => NULL,
                'image' => 'muzhskie-perchatki.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'title_ru' => 'Зонты',
                'title_uk' => 'Зонты',
                'meta_h1_ru' => 'Зонты',
                'meta_h1_uk' => 'Зонты',
                'slug_ru' => 'zonty',
                'slug_uk' => 'zonty',
                'description_ru' => 'Зонты',
                'description_uk' => 'Зонты',
                'seo' => NULL,
                'image' => 'zonty.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 0,
                'title_ru' => 'Солнцезащитные очки',
                'title_uk' => 'Солнцезащитные очки',
                'meta_h1_ru' => 'Солнцезащитные очки',
                'meta_h1_uk' => 'Солнцезащитные очки',
                'slug_ru' => 'solntsezashchitnye-ochki',
                'slug_uk' => 'solntsezashchitnye-ochki',
                'description_ru' => 'Солнцезащитные очки',
                'description_uk' => 'Солнцезащитные очки',
                'seo' => NULL,
                'image' => 'solntsezashchitnye-ochki.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 0,
                'title_ru' => 'Спортивные очки',
                'title_uk' => 'Спортивные очки',
                'meta_h1_ru' => 'Спортивные очки',
                'meta_h1_uk' => 'Спортивные очки',
                'slug_ru' => 'sportivnye-perchatki',
                'slug_uk' => 'sportivnye-perchatki',
                'description_ru' => 'Спортивные очки',
                'description_uk' => 'Спортивные очки',
                'seo' => NULL,
                'image' => 'sportivnye-perchatki.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            5 =>
                array (
                    'id' => 6,
                    'parent_id' => 0,
                    'title_ru' => 'Кожгалантерея',
                    'title_uk' => 'Кожгалантерея',
                    'meta_h1_ru' => 'Кожгалантерея',
                    'meta_h1_uk' => 'Кожгалантерея',
                    'slug_ru' => 'kozhgalantereya',
                    'slug_uk' => 'kozhgalantereya',
                    'description_ru' => 'Кожгалантерея',
                    'description_uk' => 'Кожгалантерея',
                    'seo' => NULL,
                    'image' => 'kozhgalantereya.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        ));
        
        
    }
}