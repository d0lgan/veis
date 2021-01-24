<?php

use Illuminate\Database\Seeder;
use App\ValueOption;
use Carbon\Carbon;

class ValueOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('value_options')->delete();

        ValueOption::insert([
            // Опция 1
            [
                'value_ru' => 'Альпака',
                'value_uk' => 'Альпака',
                'image' => null,
                'sorting' => '1',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Бeжевый',
                'value_uk' => 'Бiжевый',
                'image' => null,
                'sorting' => '2',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Вишня',
                'value_uk' => 'Вiшня',
                'image' => null,
                'sorting' => '3',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Кремовый',
                'value_uk' => 'Крiмовый',
                'image' => null,
                'sorting' => '4',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Красный',
                'value_uk' => 'Красный',
                'image' => null,
                'sorting' => '5',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Песочный',
                'value_uk' => 'Песочный',
                'image' => null,
                'sorting' => '6',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Черный',
                'value_uk' => 'Черный',
                'image' => null,
                'sorting' => '7',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Малиновый',
                'value_uk' => 'Малиновый',
                'image' => null,
                'sorting' => '8',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Лимонный',
                'value_uk' => 'Лимонный',
                'image' => null,
                'sorting' => '9',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => 'Темно-серый',
                'value_uk' => 'Темно-серый',
                'image' => null,
                'sorting' => '10',
                'option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Опция 2
            [
                'value_ru' => '6',
                'value_uk' => '6',
                'image' => null,
                'sorting' => '1',
                'option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => '6,5',
                'value_uk' => '6,5',
                'image' => null,
                'sorting' => '2',
                'option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => '7',
                'value_uk' => '7',
                'image' => null,
                'sorting' => '3',
                'option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => '7,5',
                'value_uk' => '7,5',
                'image' => null,
                'sorting' => '4',
                'option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => '8',
                'value_uk' => '8',
                'image' => null,
                'sorting' => '5',
                'option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => '8,5',
                'value_uk' => '8,5',
                'image' => null,
                'sorting' => '6',
                'option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'value_ru' => '9',
                'value_uk' => '9',
                'image' => null,
                'sorting' => '7',
                'option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
