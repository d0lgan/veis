<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ManufacturersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manufacturers')->delete();
        
        \DB::table('manufacturers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_ru' => 'INVU',
                'title_uk' => 'INVU',
                'image' => 'invu.jpg',
                'meta_h1_ru' => 'INVU',
                'meta_h1_uk' => 'INVU',
                'seo' => NULL,
                'slug_ru' => 'invu',
                'slug_uk' => 'invu',
                'description_ru' => 'INVU',
                'description_uk' => 'INVU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            1 => 
            array (
                'id' => 2,
                'title_ru' => 'Polaroid',
                'title_uk' => 'Polaroid',
                'image' => 'polaroid.png',
                'meta_h1_ru' => 'Polaroid',
                'meta_h1_uk' => 'Polaroid',
                'seo' => NULL,
                'slug_ru' => 'polaroid',
                'slug_uk' => 'polaroid',
                'description_ru' => 'Polaroid',
                'description_uk' => 'Polaroid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            2 => 
            array (
                'id' => 3,
                'title_ru' => 'ProVision',
                'title_uk' => 'ProVision',
                'image' => 'provision.jpg',
                'meta_h1_ru' => 'ProVision',
                'meta_h1_uk' => 'ProVision',
                'seo' => NULL,
                'slug_ru' => 'pro-vision',
                'slug_uk' => 'pro-vision',
                'description_ru' => 'ProVision',
                'description_uk' => 'ProVision',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            3 => 
            array (
                'id' => 4,
                'title_ru' => 'Doppler',
                'title_uk' => 'Doppler',
                'image' => 'doppler.jpg',
                'meta_h1_ru' => 'Doppler',
                'meta_h1_uk' => 'Doppler',
                'seo' => NULL,
                'slug_ru' => 'doppler',
                'slug_uk' => 'doppler',
                'description_ru' => 'Doppler',
                'description_uk' => 'Doppler',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            4 =>
                array (
                    'id' => 5,
                    'title_ru' => 'Happy Rain',
                    'title_uk' => 'Happy Rain',
                    'image' => 'happy-rain.jpg',
                    'meta_h1_ru' => 'Happy Rain',
                    'meta_h1_uk' => 'Happy Rain',
                    'seo' => NULL,
                    'slug_ru' => 'happy-rain',
                    'slug_uk' => 'happy-rain',
                    'description_ru' => 'Happy Rain',
                    'description_uk' => 'Happy Rain',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            5 =>
                array (
                    'id' => 6,
                    'title_ru' => 'Always Wild',
                    'title_uk' => 'Always Wild',
                    'image' => 'always-wild.jpg',
                    'meta_h1_ru' => 'Always Wild',
                    'meta_h1_uk' => 'Always Wild',
                    'seo' => NULL,
                    'slug_ru' => 'always-wild',
                    'slug_uk' => 'always-wild',
                    'description_ru' => 'Always Wild',
                    'description_uk' => 'Always Wild',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            6 =>
                array (
                    'id' => 7,
                    'title_ru' => 'Amelie Galanti',
                    'title_uk' => 'Amelie Galanti',
                    'image' => 'amelie-galanti.png',
                    'meta_h1_ru' => 'Amelie Galanti',
                    'meta_h1_uk' => 'Amelie Galanti',
                    'seo' => NULL,
                    'slug_ru' => 'amelie-galanti',
                    'slug_uk' => 'amelie-galanti',
                    'description_ru' => 'Amelie Galanti',
                    'description_uk' => 'Amelie Galanti',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            7 =>
                array (
                    'id' => 8,
                    'title_ru' => 'Украина',
                    'title_uk' => 'Украина',
                    'image' => null,
                    'meta_h1_ru' => 'Украина',
                    'meta_h1_uk' => 'Украина',
                    'seo' => NULL,
                    'slug_ru' => 'ukraina',
                    'slug_uk' => 'ukraina',
                    'description_ru' => 'Украина',
                    'description_uk' => 'Украина',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        ));
        
        
    }
}