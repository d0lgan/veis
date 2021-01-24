<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GroupAttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('group_attributes')->delete();
        
        \DB::table('group_attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_ru' => 'Разновидность перчаток',
                'title_uk' => 'Разновидность перчаток',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            1 =>
            array (
                'id' => 2,
                'title_ru' => 'Материал подкладки',
                'title_uk' => 'Материал подкладки',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            2 =>
            array (
                'id' => 3,
                'title_ru' => 'Цвет',
                'title_uk' => 'Цвет',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            3 =>
            array (
                'id' => 4,
                'title_ru' => 'Пол',
                'title_uk' => 'Пол',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            4 =>
            array (
                'id' => 5,
                'title_ru' => 'Тип рисунка',
                'title_uk' => 'Тип рисунка',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            5 =>
            array (
                'id' => 6,
                'title_ru' => 'Материал купола',
                'title_uk' => 'Материал купола',
                'category_id' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            6 =>
                array (
                    'id' => 7,
                    'title_ru' => 'Форма оправы',
                    'title_uk' => 'Форма оправы',
                    'category_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
            ),
            7 =>
                array (
                    'id' => 8,
                    'title_ru' => 'Материал линз',
                    'title_uk' => 'Материал линз',
                    'category_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            8 =>
                array (
                    'id' => 9,
                    'title_ru' => 'Цвет линз',
                    'title_uk' => 'Цвет линз',
                    'category_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            9 =>
                array (
                    'id' => 10,
                    'title_ru' => 'Тип изделия',
                    'title_uk' => 'Тип изделия',
                    'category_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            10 =>
                array (
                    'id' => 11,
                    'title_ru' => 'Вид застежки',
                    'title_uk' => 'Вид застежки',
                    'category_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            11 =>
                array (
                    'id' => 12,
                    'title_ru' => 'Способ ношения',
                    'title_uk' => 'Способ ношения',
                    'category_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            12 =>
                array (
                    'id' => 13,
                    'title_ru' => 'Количество основных отделений',
                    'title_uk' => 'Количество основных отделений',
                    'category_id' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        ));
        
        
    }
}