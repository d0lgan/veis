<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Васильев Петр',
                'email' => 'mihail@veis.dp.ua',
                'phone' => '568767867868',
                'slug' => 'korolkov-sergey',
                'blocked' => 0,
                'password' => '$2y$10$JWalLDMQKe91IqXFaZaB6OVJcUAjpf3AfZWDrKc2Rh7i3XD.i9Pvq',
                'remember_token' => '1EQtdOHWzOvQqHWcbVbIXXfFWZxXJM6jvzSgsF5Omo06zYs9WMtAQ5ZZKSUi',
                'created_at' => '2018-03-04 20:39:08',
                'updated_at' => '2018-05-19 19:58:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Марина Полякова',
                'email' => 'ivan2@ivan.ivan',
                'phone' => '0639151718',
                'slug' => 'marina-polyakova',
                'blocked' => NULL,
                'password' => '$2y$10$eYpWrA2f6VuZgN3TY96Y4OTievyJR3aAKIMjrw7F1a0IDTi/RzpA.',
                'remember_token' => 'BqX6coomdKPeeg0nQOGHTeiFo2Hzr1TufCpI9GcdqyRQF4xgbPyL0rYN2anO',
                'created_at' => '2018-03-19 20:28:20',
                'updated_at' => '2018-05-09 19:41:29',
            ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Денис Листопадов',
                    'email' => 'admin@admin.com',
                    'phone' => '0976996261',
                    'slug' => 'denis-listopadov',
                    'blocked' => NULL,
                    'password' => Hash::make('qweqweqwe'),
                    'remember_token' => null,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                )
        ));
    }
}