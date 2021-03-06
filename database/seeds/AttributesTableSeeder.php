<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();

        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_ru' => 'Автомобильные',
                'name_uk' => 'Автомобильные',
                'item_name_ru' => 'Автомобильные',
                'item_name_uk' => 'Автомобильные',
                'group_attribute_id' => 1,
                'sort' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            1 =>
                array (
                    'id' => 2,
                    'name_ru' => 'Длинные',
                    'name_uk' => 'Длинные',
                    'item_name_ru' => 'Длинные',
                    'item_name_uk' => 'Длинные',
                    'group_attribute_id' => 1,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name_ru' => 'Классичиские',
                    'name_uk' => 'Классичиские',
                    'item_name_ru' => 'Классичиские',
                    'item_name_uk' => 'Классичиские',
                    'group_attribute_id' => 1,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name_ru' => 'Митенки',
                    'name_uk' => 'Митенки',
                    'item_name_ru' => 'Митенки',
                    'item_name_uk' => 'Митенки',
                    'group_attribute_id' => 1,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name_ru' => 'Без подкладки',
                    'name_uk' => 'Без подкладки',
                    'item_name_ru' => 'Без подкладки',
                    'item_name_uk' => 'Без подкладки',
                    'group_attribute_id' => 2,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name_ru' => 'Шелк',
                    'name_uk' => 'Шелк',
                    'item_name_ru' => 'Шелк',
                    'item_name_uk' => 'Шелк',
                    'group_attribute_id' => 2,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name_ru' => 'Шерсть',
                    'name_uk' => 'Шерсть',
                    'item_name_ru' => 'Шерсть',
                    'item_name_uk' => 'Шерсть',
                    'group_attribute_id' => 2,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name_ru' => 'Овчина',
                    'name_uk' => 'Овчина',
                    'item_name_ru' => 'Овчина',
                    'item_name_uk' => 'Овчина',
                    'group_attribute_id' => 2,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            8 =>
                array (
                    'id' => 9,
                    'name_ru' => 'Бежевый',
                    'name_uk' => 'Бежевый',
                    'item_name_ru' => 'Бежевый',
                    'item_name_uk' => 'Бежевый',
                    'group_attribute_id' => 3,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            9 =>
                array (
                    'id' => 10,
                    'name_ru' => 'Белый',
                    'name_uk' => 'Белый',
                    'item_name_ru' => 'Белый',
                    'item_name_uk' => 'Белый',
                    'group_attribute_id' => 3,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            10 =>
                array (
                    'id' => 11,
                    'name_ru' => 'Бирюзовый',
                    'name_uk' => 'Бирюзовый',
                    'item_name_ru' => 'Бирюзовый',
                    'item_name_uk' => 'Бирюзовый',
                    'group_attribute_id' => 3,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            11 =>
                array (
                    'id' => 12,
                    'name_ru' => 'Голубой',
                    'name_uk' => 'Голубой',
                    'item_name_ru' => 'Голубой',
                    'item_name_uk' => 'Голубой',
                    'group_attribute_id' => 3,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            12 =>
                array (
                    'id' => 13,
                    'name_ru' => 'Желтый',
                    'name_uk' => 'Желтый',
                    'item_name_ru' => 'Желтый',
                    'item_name_uk' => 'Желтый',
                    'group_attribute_id' => 3,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            14 =>
                array (
                    'id' => 14,
                    'name_ru' => 'Мужской',
                    'name_uk' => 'Мужской',
                    'item_name_ru' => 'Мужской',
                    'item_name_uk' => 'Мужской',
                    'group_attribute_id' => 4,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            15 =>
                array (
                    'id' => 16,
                    'name_ru' => 'Женский',
                    'name_uk' => 'Женский',
                    'item_name_ru' => 'Женский',
                    'item_name_uk' => 'Женский',
                    'group_attribute_id' => 4,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            16 =>
                array (
                    'id' => 17,
                    'name_ru' => 'Унисекс',
                    'name_uk' => 'Унисекс',
                    'item_name_ru' => 'Унисекс',
                    'item_name_uk' => 'Унисекс',
                    'group_attribute_id' => 4,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            17 =>
                array (
                    'id' => 18,
                    'name_ru' => 'Абстракция',
                    'name_uk' => 'Абстракция',
                    'item_name_ru' => 'Абстракция',
                    'item_name_uk' => 'Абстракция',
                    'group_attribute_id' => 5,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            18 =>
                array (
                    'id' => 19,
                    'name_ru' => 'Города',
                    'name_uk' => 'Города',
                    'item_name_ru' => 'Города',
                    'item_name_uk' => 'Города',
                    'group_attribute_id' => 5,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            19 =>
                array (
                    'id' => 20,
                    'name_ru' => 'Горох',
                    'name_uk' => 'Горох',
                    'item_name_ru' => 'Горох',
                    'item_name_uk' => 'Горох',
                    'group_attribute_id' => 5,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            20 =>
                array (
                    'id' => 21,
                    'name_ru' => 'Картина',
                    'name_uk' => 'Картина',
                    'item_name_ru' => 'Картина',
                    'item_name_uk' => 'Картина',
                    'group_attribute_id' => 5,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            21 =>
                array (
                    'id' => 22,
                    'name_ru' => 'Однотонный',
                    'name_uk' => 'Однотонный',
                    'item_name_ru' => 'Однотонный',
                    'item_name_uk' => 'Однотонный',
                    'group_attribute_id' => 5,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            22 =>
                array (
                    'id' => 23,
                    'name_ru' => 'Итальянский сатин',
                    'name_uk' => 'Итальянский сатин',
                    'item_name_ru' => 'Итальянский сатин',
                    'item_name_uk' => 'Итальянский сатин',
                    'group_attribute_id' => 6,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            23 =>
                array (
                    'id' => 24,
                    'name_ru' => 'Полиэстер',
                    'name_uk' => 'Полиэстер',
                    'item_name_ru' => 'Полиэстер',
                    'item_name_uk' => 'Полиэстер',
                    'group_attribute_id' => 6,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            24 =>
                array (
                    'id' => 25,
                    'name_ru' => 'Сатин',
                    'name_uk' => 'Сатин',
                    'item_name_ru' => 'Сатин',
                    'item_name_uk' => 'Сатин',
                    'group_attribute_id' => 6,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            25 =>
                array (
                    'id' => 26,
                    'name_ru' => 'Авиаторы',
                    'name_uk' => 'Авиаторы',
                    'item_name_ru' => 'Авиаторы',
                    'item_name_uk' => 'Авиаторы',
                    'group_attribute_id' => 7,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            26 =>
                array (
                    'id' => 27,
                    'name_ru' => 'Кошачий глаз',
                    'name_uk' => 'Кошачий глаз',
                    'item_name_ru' => 'Кошачий глаз',
                    'item_name_uk' => 'Кошачий глаз',
                    'group_attribute_id' => 7,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            27 =>
                array (
                    'id' => 28,
                    'name_ru' => 'Бабочки',
                    'name_uk' => 'Бабочки',
                    'item_name_ru' => 'Бабочки',
                    'item_name_uk' => 'Бабочки',
                    'group_attribute_id' => 7,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            28 =>
                array (
                    'id' => 29,
                    'name_ru' => 'Круглые',
                    'name_uk' => 'Круглые',
                    'item_name_ru' => 'Круглые',
                    'item_name_uk' => 'Круглые',
                    'group_attribute_id' => 7,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            29 =>
                array (
                    'id' => 30,
                    'name_ru' => 'Прямоугольные',
                    'name_uk' => 'Прямоугольные',
                    'item_name_ru' => 'Прямоугольные',
                    'item_name_uk' => 'Прямоугольные',
                    'group_attribute_id' => 7,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            30 =>
                array (
                    'id' => 31,
                    'name_ru' => 'Маска',
                    'name_uk' => 'Маска',
                    'item_name_ru' => 'Маска',
                    'item_name_uk' => 'Маска',
                    'group_attribute_id' => 7,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            31 =>
                array (
                    'id' => 32,
                    'name_ru' => 'Ацетат целюлозы',
                    'name_uk' => 'Ацетат целюлозы',
                    'item_name_ru' => 'Ацетат целюлозы',
                    'item_name_uk' => 'Ацетат целюлозы',
                    'group_attribute_id' => 8,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            32 =>
                array (
                    'id' => 33,
                    'name_ru' => 'Поликарбонат',
                    'name_uk' => 'Поликарбонат',
                    'item_name_ru' => 'Поликарбонат',
                    'item_name_uk' => 'Поликарбонат',
                    'group_attribute_id' => 8,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            33 =>
                array (
                    'id' => 34,
                    'name_ru' => 'Полимер',
                    'name_uk' => 'Полимер',
                    'item_name_ru' => 'Полимер',
                    'item_name_uk' => 'Полимер',
                    'group_attribute_id' => 8,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            34 =>
                array (
                    'id' => 35,
                    'name_ru' => 'Триацетат целюлозы',
                    'name_uk' => 'Триацетат целюлозы',
                    'item_name_ru' => 'Триацетат целюлозы',
                    'item_name_uk' => 'Триацетат целюлозы',
                    'group_attribute_id' => 8,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            35 =>
                array (
                    'id' => 36,
                    'name_ru' => 'Серый',
                    'name_uk' => 'Серый',
                    'item_name_ru' => 'Серый',
                    'item_name_uk' => 'Серый',
                    'group_attribute_id' => 9,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            36 =>
                array (
                    'id' => 37,
                    'name_ru' => 'Вишневый',
                    'name_uk' => 'Вишневый',
                    'item_name_ru' => 'Вишневый',
                    'item_name_uk' => 'Вишневый',
                    'group_attribute_id' => 9,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            37 =>
                array (
                    'id' => 38,
                    'name_ru' => 'Голубой',
                    'name_uk' => 'Голубой',
                    'item_name_ru' => 'Голубой',
                    'item_name_uk' => 'Голубой',
                    'group_attribute_id' => 9,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            38 =>
                array (
                    'id' => 39,
                    'name_ru' => 'Желтый',
                    'name_uk' => 'Желтый',
                    'item_name_ru' => 'Желтый',
                    'item_name_uk' => 'Желтый',
                    'group_attribute_id' => 9,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            39 =>
                array (
                    'id' => 40,
                    'name_ru' => 'Зелёный',
                    'name_uk' => 'Зелёный',
                    'item_name_ru' => 'Зелёный',
                    'item_name_uk' => 'Зелёный',
                    'group_attribute_id' => 9,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            40 =>
                array (
                    'id' => 41,
                    'name_ru' => 'Борсетка',
                    'name_uk' => 'Борсетка',
                    'item_name_ru' => 'Борсетка',
                    'item_name_uk' => 'Борсетка',
                    'group_attribute_id' => 10,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            41 =>
                array (
                    'id' => 42,
                    'name_ru' => 'Визитница',
                    'name_uk' => 'Визитница',
                    'item_name_ru' => 'Визитница',
                    'item_name_uk' => 'Визитница',
                    'group_attribute_id' => 10,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            42 =>
                array (
                    'id' => 43,
                    'name_ru' => 'Зажим для купюр',
                    'name_uk' => 'Зажим для купюр',
                    'item_name_ru' => 'Зажим для купюр',
                    'item_name_uk' => 'Зажим для купюр',
                    'group_attribute_id' => 10,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            43 =>
                array (
                    'id' => 44,
                    'name_ru' => 'Картхолдер',
                    'name_uk' => 'Картхолдер',
                    'item_name_ru' => 'Картхолдер',
                    'item_name_uk' => 'Картхолдер',
                    'group_attribute_id' => 10,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            44 =>
                array (
                    'id' => 45,
                    'name_ru' => 'Ключница',
                    'name_uk' => 'Ключница',
                    'item_name_ru' => 'Ключница',
                    'item_name_uk' => 'Ключница',
                    'group_attribute_id' => 10,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            45 =>
                array (
                    'id' => 46,
                    'name_ru' => 'Косметичка',
                    'name_uk' => 'Косметичка',
                    'item_name_ru' => 'Косметичка',
                    'item_name_uk' => 'Косметичка',
                    'group_attribute_id' => 10,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            46 =>
                array (
                    'id' => 47,
                    'name_ru' => 'Без застежки',
                    'name_uk' => 'Без застежки',
                    'item_name_ru' => 'Без застежки',
                    'item_name_uk' => 'Без застежки',
                    'group_attribute_id' => 11,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            47 =>
                array (
                    'id' => 48,
                    'name_ru' => 'Магнитная застежка',
                    'name_uk' => 'Магнитная застежка',
                    'item_name_ru' => 'Магнитная застежка',
                    'item_name_uk' => 'Магнитная застежка',
                    'group_attribute_id' => 11,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            48 =>
                array (
                    'id' => 49,
                    'name_ru' => 'Механическая застежка',
                    'name_uk' => 'Механическая застежка',
                    'item_name_ru' => 'Механическая застежка',
                    'item_name_uk' => 'Механическая застежка',
                    'group_attribute_id' => 11,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            49 =>
                array (
                    'id' => 50,
                    'name_ru' => 'Молния',
                    'name_uk' => 'Молния',
                    'item_name_ru' => 'Молния',
                    'item_name_uk' => 'Молния',
                    'group_attribute_id' => 11,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            50 =>
                array (
                    'id' => 51,
                    'name_ru' => 'Хлястик',
                    'name_uk' => 'Хлястик',
                    'item_name_ru' => 'Хлястик',
                    'item_name_uk' => 'Хлястик',
                    'group_attribute_id' => 11,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            51 =>
                array (
                    'id' => 52,
                    'name_ru' => 'В руке',
                    'name_uk' => 'В руке',
                    'item_name_ru' => 'В руке',
                    'item_name_uk' => 'В руке',
                    'group_attribute_id' => 12,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            52 =>
                array (
                    'id' => 53,
                    'name_ru' => 'Вертикально',
                    'name_uk' => 'Вертикально',
                    'item_name_ru' => 'Вертикально',
                    'item_name_uk' => 'Вертикально',
                    'group_attribute_id' => 12,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            53 =>
                array (
                    'id' => 54,
                    'name_ru' => 'Горизонтально',
                    'name_uk' => 'Горизонтально',
                    'item_name_ru' => 'Горизонтально',
                    'item_name_uk' => 'Горизонтально',
                    'group_attribute_id' => 12,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            54 =>
                array (
                    'id' => 55,
                    'name_ru' => '1',
                    'name_uk' => '1',
                    'item_name_ru' => '1',
                    'item_name_uk' => '1',
                    'group_attribute_id' => 13,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            55 =>
                array (
                    'id' => 56,
                    'name_ru' => '12',
                    'name_uk' => '12',
                    'item_name_ru' => '12',
                    'item_name_uk' => '12',
                    'group_attribute_id' => 13,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            56 =>
                array (
                    'id' => 57,
                    'name_ru' => '19',
                    'name_uk' => '19',
                    'item_name_ru' => '19',
                    'item_name_uk' => '19',
                    'group_attribute_id' => 13,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            57 =>
                array (
                    'id' => 58,
                    'name_ru' => '20',
                    'name_uk' => '20',
                    'item_name_ru' => '20',
                    'item_name_uk' => '20',
                    'group_attribute_id' => 13,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            58 =>
                array (
                    'id' => 59,
                    'name_ru' => '2',
                    'name_uk' => '2',
                    'item_name_ru' => '2',
                    'item_name_uk' => '2',
                    'group_attribute_id' => 13,
                    'sort' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),

        ));
        
        
    }
}