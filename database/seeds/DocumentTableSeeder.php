<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Document;

class DocumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('documents')->delete();

        Document::insert([
            //Товар 1
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'ru',
                'type' => 'desc',
                'content' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'ru',
                'type' => 'meta',
                'content' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'ru',
                'type' => 'seo',
                'content' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'uk',
                'type' => 'desc',
                'content' => 'Жіночі рукавички з натуральної шкіри модель 001 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Жіночі рукавички з натуральної шкіри модель 001 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'uk',
                'type' => 'meta',
                'content' => 'Жіночі рукавички з натуральної шкіри модель 001 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 1,
                'lang' => 'uk',
                'type' => 'seo',
                'content' => 'Жіночі рукавички з натуральної шкіри модель 001 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 2
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'ru',
                'type' => 'desc',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'ru',
                'type' => 'meta',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'ru',
                'type' => 'seo',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'uk',
                'type' => 'desc',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 200 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 200 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'uk',
                'type' => 'meta',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 200 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 2,
                'lang' => 'uk',
                'type' => 'seo',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 200 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 3
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'ru',
                'type' => 'desc',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'ru',
                'type' => 'meta',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'ru',
                'type' => 'seo',
                'content' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'uk',
                'type' => 'desc',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 027 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 027 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'uk',
                'type' => 'meta',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 027 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 3,
                'lang' => 'uk',
                'type' => 'seo',
                'content' => 'Автомобільні рукавички з натуральної шкіри модель 027 без підкладки',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 4
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'ru',
                'type' => 'desc',
                'content' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'ru',
                'type' => 'meta',
                'content' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'ru',
                'type' => 'seo',
                'content' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'uk',
                'type' => 'desc',
                'content' => 'Чоловічі рукавички з натуральної шкіри модель 031 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Чоловічі рукавички з натуральної шкіри модель 031 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'uk',
                'type' => 'meta',
                'content' => 'Чоловічі рукавички з натуральної шкіри модель 031 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 4,
                'lang' => 'uk',
                'type' => 'seo',
                'content' => 'Чоловічі рукавички з натуральної шкіри модель 031 на вовняний підкладці',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 5
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'ru',
                'type' => 'desc',
                'content' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'ru',
                'type' => 'meta',
                'content' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'ru',
                'type' => 'seo',
                'content' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'uk',
                'type' => 'desc',
                'content' => 'Парасолька жіночий HAPPY RAIN (ХЕППІ Рейн) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Парасолька жіночий HAPPY RAIN (ХЕППІ Рейн) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'uk',
                'type' => 'meta',
                'content' => 'Парасолька жіночий HAPPY RAIN (ХЕППІ Рейн) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 5,
                'lang' => 'uk',
                'type' => 'seo',
                'content' => 'Парасолька жіночий HAPPY RAIN (ХЕППІ Рейн) U42275-3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 6
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'ru',
                'type' => 'desc',
                'content' => 'Зонт женский автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Зонт женский автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'ru',
                'type' => 'meta',
                'content' => 'Зонт женский автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'ru',
                'type' => 'seo',
                'content' => 'Зонт женский автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'uk',
                'type' => 'desc',
                'content' => 'Парасолька жіночий автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Парасолька жіночий автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'uk',
                'type' => 'meta',
                'content' => 'Парасолька жіночий автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'product',
                'module_id' => 6,
                'lang' => 'uk',
                'type' => 'seo',
                'content' => 'Парасолька жіночий автомат DOPPLER модель 7106303',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option',
                'module_id' => 1,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Цвет',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option',
                'module_id' => 1,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Колір',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option',
                'module_id' => 2,
                'lang' => 'ru',
                'type' => 'title',
                'content' => 'Размер',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option',
                'module_id' => 2,
                'lang' => 'uk',
                'type' => 'title',
                'content' => 'Розмір',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 1,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Альпака',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 1,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Альпака',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 2,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Бежевый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 2,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Бежевый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 3,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Вишня',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 3,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Вишня',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 4,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Кремовый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 4,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Кремовый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 5,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Красный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 5,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Красный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 6,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Песочный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 6,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Песочный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 7,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Черный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 7,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Черный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 8,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Малиновый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 8,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Малиновый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 9,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Лимонный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 9,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Лимонный',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 10,
                'lang' => 'ru',
                'type' => 'value',
                'content' => 'Темно-серый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 10,
                'lang' => 'uk',
                'type' => 'value',
                'content' => 'Темно-серый',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 11,
                'lang' => 'ru',
                'type' => 'value',
                'content' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 11,
                'lang' => 'uk',
                'type' => 'value',
                'content' => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 12,
                'lang' => 'ru',
                'type' => 'value',
                'content' => '6,5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 12,
                'lang' => 'uk',
                'type' => 'value',
                'content' => '6,5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 13,
                'lang' => 'ru',
                'type' => 'value',
                'content' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 13,
                'lang' => 'uk',
                'type' => 'value',
                'content' => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 14,
                'lang' => 'ru',
                'type' => 'value',
                'content' => '7,5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 14,
                'lang' => 'uk',
                'type' => 'value',
                'content' => '7,5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 15,
                'lang' => 'ru',
                'type' => 'value',
                'content' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 15,
                'lang' => 'uk',
                'type' => 'value',
                'content' => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 16,
                'lang' => 'ru',
                'type' => 'value',
                'content' => '8,5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 16,
                'lang' => 'uk',
                'type' => 'value',
                'content' => '8,5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'module' => 'option_value',
                'module_id' => 17,
                'lang' => 'ru',
                'type' => 'value',
                'content' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'module' => 'option_value',
                'module_id' => 17,
                'lang' => 'uk',
                'type' => 'value',
                'content' => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

        ]);
    }
}
