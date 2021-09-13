<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Currency::insert([
            ['id' => 1, 'title' => 'Гривна', 'code' => 'UAH', 'rate' => 1.00, 'public' => 1, 'default' => 1],
            ['id' => 2, 'title' => 'Доллар', 'code' => 'USD', 'rate' => 0.041, 'public' => 1, 'default' => 0]
        ]);
    }
}
