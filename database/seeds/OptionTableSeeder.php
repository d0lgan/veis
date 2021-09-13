<?php

use Illuminate\Database\Seeder;
use App\Option;
use Carbon\Carbon;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('options')->delete();

        Option::insert([
           [
               'title_ru' => 'Цвет',
               'title_uk' => 'Цвiт',
               'type' => 'checkbox',
               'sort' => '1',
               'need' => 1,
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
           ],
            [
                'title_ru' => 'Размер',
                'title_uk' => 'Рoзмiр',
                'type' => 'checkbox',
                'sort' => '2',
                'need' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
