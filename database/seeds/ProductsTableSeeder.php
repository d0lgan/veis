<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('products')->delete();


        $prod = array (
            0 =>
                array (
                    'title_ru' => 'ruЖенские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                    'title_uk' => 'ukЖенские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                    'slug_ru' => 'rururuzhenskie-perchatki-iz-naturalnoj-kozhi-model-001-na-sherstya',
                    'slug_uk' => 'ukukukzhenskie-perchatki-iz-naturalnoj-kozhi-model-001-na-sherstya',
                    'category_id' => 1,
                    'category_title' => 'Женские перчатки',
                    'manufacturer_id' => 8,
                    'manufacturer_title' => 'Украина',
                    'undiscounted' => 1294,
                    'price' => 1060,
                    'vendor_code' => 001,
                    'ude' => null,
                    'course' => null,
                    'sort' => 0,
                    'lens_height' => null,
                    'lens_width' => null,
                    'bridge_width' => null,
                    'long_arms' => null,
                    'frame_width' => null,
                    'type' => null,
                    'end_stock' => null,
                    'meta_h1_ru' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                    'meta_h1_uk' => 'Женскiе перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                    'description_ru' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                    'description_uk' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
                    'image' => 'product_main_1591281899.jpg',
                    'seo' => NULL,
                    'model' => NULL,
                    'supplier' => NULL,
                    'public' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            1 =>
                array (
                    'title_ru' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
                    'title_uk' => 'Автомобiльные перчатки из натуральной кожи модель 200 без подкладки',
                    'slug_ru' => 'avtomobilnye-perchatki-iz-naturalnoy-kozhi-model-200-bez-podkladki',
                    'slug_uk' => 'avtomobilnye-perchatki-iz-naturalnoy-kozhi-model-200-bez-podkladki',
                    'category_id' => 1,
                    'category_title' => 'Женские перчатки',
                    'manufacturer_id' => 8,
                    'manufacturer_title' => 'Украина',
                    'undiscounted' => 1227,
                    'price' => 940,
                    'vendor_code' => 200,
                    'ude' => null,
                    'course' => null,
                    'sort' => 0,
                    'lens_height' => null,
                    'lens_width' => null,
                    'bridge_width' => null,
                    'long_arms' => null,
                    'frame_width' => null,
                    'type' => null,
                    'end_stock' => null,
                    'meta_h1_ru' => 'ruАвтомобильные перчатки из натуральной кожи модель 200 без подкладки',
                    'meta_h1_uk' => 'ukАвтомобильные перчатки из натуральной кожи модель 200 без подкладки',
                    'description_ru' => 'ruАвтомобильные перчатки из натуральной кожи модель 200 без подкладки',
                    'description_uk' => 'ukАвтомобильные перчатки из натуральной кожи модель 200 без подкладки',
                    'image' => 'product_main_1591284455.jpg',
                    'seo' => NULL,
                    'model' => NULL,
                    'supplier' => NULL,
                    'public' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            2 =>
                array (
                    'title_ru' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                    'title_uk' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                    'slug_ru' => 'avtomobilnye-perchatki-iz-naturalnoy-kozhi-model-027-bez-podkladki',
                    'slug_uk' => 'avtomobilnye-perchatki-iz-naturalnoy-kozhi-model-027-bez-podkladki',
                    'category_id' => 2,
                    'category_title' => 'Мужские перчатки',
                    'manufacturer_id' => 8,
                    'manufacturer_title' => 'Украина',
                    'undiscounted' => 963,
                    'price' => 800,
                    'vendor_code' => 027,
                    'ude' => null,
                    'course' => null,
                    'sort' => 0,
                    'lens_height' => null,
                    'lens_width' => null,
                    'bridge_width' => null,
                    'long_arms' => null,
                    'frame_width' => null,
                    'type' => null,
                    'end_stock' => null,
                    'meta_h1_ru' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                    'meta_h1_uk' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                    'description_ru' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                    'description_uk' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
                    'image' => 'product_main_1591284465.jpg',
                    'seo' => NULL,
                    'model' => NULL,
                    'supplier' => NULL,
                    'public' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            3 =>
                array (
                    'title_ru' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                    'title_uk' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                    'slug_ru' => 'muzhskie-perchatki-iz-naturalnoy-kozhi-model-031-na-sherstyanoy-podkladke',
                    'slug_uk' => 'muzhskie-perchatki-iz-naturalnoy-kozhi-model-031-na-sherstyanoy-podkladke',
                    'category_id' => 2,
                    'category_title' => 'Мужские перчатки',
                    'manufacturer_id' => 8,
                    'manufacturer_title' => 'Украина',
                    'undiscounted' => 1411,
                    'price' => 1150,
                    'vendor_code' => 031,
                    'ude' => null,
                    'course' => null,
                    'sort' => 0,
                    'lens_height' => null,
                    'lens_width' => null,
                    'bridge_width' => null,
                    'long_arms' => null,
                    'frame_width' => null,
                    'type' => null,
                    'end_stock' => null,
                    'meta_h1_ru' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                    'meta_h1_uk' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                    'description_ru' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                    'description_uk' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
                    'image' => 'product_main_1591284478.jpg',
                    'seo' => NULL,
                    'model' => NULL,
                    'supplier' => NULL,
                    'public' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            4 =>
                array (
                    'title_ru' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'title_uk' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'slug_ru' => 'zont-zhenskiy-happy-rain-heppi-reyn-u42275-3',
                    'slug_uk' => 'zont-zhenskiy-happy-rain-heppi-reyn-u42275-3',
                    'category_id' => 3,
                    'category_title' => 'Зонты',
                    'manufacturer_id' => 5,
                    'manufacturer_title' => 'Happy Rain',
                    'undiscounted' => 651,
                    'price' => 0,
                    'vendor_code' => 58005,
                    'ude' => null,
                    'course' => null,
                    'sort' => 0,
                    'lens_height' => null,
                    'lens_width' => null,
                    'bridge_width' => null,
                    'long_arms' => null,
                    'frame_width' => null,
                    'type' => null,
                    'end_stock' => null,
                    'meta_h1_ru' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'meta_h1_uk' => 'Зонт_uk женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'description_ru' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'description_uk' => 'Зонт_uk женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'image' => 'product_main_1591284572.jpg',
                    'seo' => NULL,
                    'model' => NULL,
                    'supplier' => NULL,
                    'public' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            5 =>
                array (
                    'title_ru' => 'Зонт женский автомат DOPPLER модель 7106303',
                    'title_uk' => 'Зонт_uk женский автомат DOPPLER модель 7106303',
                    'slug_ru' => 'zont-zhenskiy-avtomat-doppler-model-7106303',
                    'slug_uk' => 'zont_uk-zhenskiy-avtomat-doppler-model-7106303',
                    'category_id' => 3,
                    'category_title' => 'Зонты',
                    'manufacturer_id' => 4,
                    'manufacturer_title' => 'Doppler',
                    'undiscounted' => 819,
                    'price' => 0,
                    'vendor_code' => 7106303,
                    'ude' => null,
                    'course' => null,
                    'sort' => 0,
                    'lens_height' => null,
                    'lens_width' => null,
                    'bridge_width' => null,
                    'long_arms' => null,
                    'frame_width' => null,
                    'type' => null,
                    'end_stock' => null,
                    'meta_h1_ru' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'meta_h1_uk' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'description_ru' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'description_uk' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
                    'image' => 'product_main_1591285587.jpg',
                    'seo' => NULL,
                    'model' => NULL,
                    'supplier' => NULL,
                    'public' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        );
        
        Product::insert($prod);


		// $index = 0;


  //       for ($i=0; $i < 150; $i++) {

		// 	Product::insert($prod[$index]);        	


  //       	if ($index >= 5)
  //       		$index = 0;
  //       	else
  //       		$index++;

  //       }




        // Product::insert(array (
        //     0 =>
        //         array (
        //             'id' => 1,
        //             'title' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
        //             'slug' => 'zhenskie-perchatki-iz-naturalnoj-kozhi-model-001-na-sherstya',
        //             'category_id' => 1,
        //             'category_title' => 'Женские перчатки',
        //             'manufacturer_id' => 8,
        //             'manufacturer_title' => 'Украина',
        //             'undiscounted' => 1294,
        //             'price' => 1060,
        //             'vendor_code' => 001,
        //             'ude' => null,
        //             'course' => null,
        //             'sort' => 0,
        //             'tag' => 'test',
        //             'lens_height' => null,
        //             'lens_width' => null,
        //             'bridge_width' => null,
        //             'long_arms' => null,
        //             'frame_width' => null,
        //             'type' => null,
        //             'end_stock' => null,
        //             'meta_h1' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
        //             'description' => 'Женские перчатки из натуральной кожи модель 001 на шерстяной подкладке',
        //             'image' => 'product_main_1591281899.jpg',
        //             'seo' => NULL,
        //             'model' => NULL,
        //             'supplier' => NULL,
        //             'public' => 1,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ),
        //     1 =>
        //         array (
        //             'id' => 2,
        //             'title' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
        //             'slug' => 'avtomobilnye-perchatki-iz-naturalnoy-kozhi-model-200-bez-podkladki',
        //             'category_id' => 1,
        //             'category_title' => 'Женские перчатки',
        //             'manufacturer_id' => 8,
        //             'manufacturer_title' => 'Украина',
        //             'undiscounted' => 1227,
        //             'price' => 940,
        //             'vendor_code' => 200,
        //             'ude' => null,
        //             'course' => null,
        //             'sort' => 0,
        //             'tag' => 'test',
        //             'lens_height' => null,
        //             'lens_width' => null,
        //             'bridge_width' => null,
        //             'long_arms' => null,
        //             'frame_width' => null,
        //             'type' => null,
        //             'end_stock' => null,
        //             'meta_h1' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
        //             'description' => 'Автомобильные перчатки из натуральной кожи модель 200 без подкладки',
        //             'image' => 'product_main_1591284455.jpg',
        //             'seo' => NULL,
        //             'model' => NULL,
        //             'supplier' => NULL,
        //             'public' => 1,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ),
        //     2 =>
        //         array (
        //             'id' => 3,
        //             'title' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
        //             'slug' => 'avtomobilnye-perchatki-iz-naturalnoy-kozhi-model-027-bez-podkladki',
        //             'category_id' => 2,
        //             'category_title' => 'Мужские перчатки',
        //             'manufacturer_id' => 8,
        //             'manufacturer_title' => 'Украина',
        //             'undiscounted' => 963,
        //             'price' => 800,
        //             'vendor_code' => 027,
        //             'ude' => null,
        //             'course' => null,
        //             'sort' => 0,
        //             'tag' => 'test',
        //             'lens_height' => null,
        //             'lens_width' => null,
        //             'bridge_width' => null,
        //             'long_arms' => null,
        //             'frame_width' => null,
        //             'type' => null,
        //             'end_stock' => null,
        //             'meta_h1' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
        //             'description' => 'Автомобильные перчатки из натуральной кожи модель 027 без подкладки',
        //             'image' => 'product_main_1591284465.jpg',
        //             'seo' => NULL,
        //             'model' => NULL,
        //             'supplier' => NULL,
        //             'public' => 1,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ),
        //     3 =>
        //         array (
        //             'id' => 4,
        //             'title' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
        //             'slug' => 'muzhskie-perchatki-iz-naturalnoy-kozhi-model-031-na-sherstyanoy-podkladke',
        //             'category_id' => 2,
        //             'category_title' => 'Мужские перчатки',
        //             'manufacturer_id' => 8,
        //             'manufacturer_title' => 'Украина',
        //             'undiscounted' => 1411,
        //             'price' => 1150,
        //             'vendor_code' => 031,
        //             'ude' => null,
        //             'course' => null,
        //             'sort' => 0,
        //             'tag' => 'test',
        //             'lens_height' => null,
        //             'lens_width' => null,
        //             'bridge_width' => null,
        //             'long_arms' => null,
        //             'frame_width' => null,
        //             'type' => null,
        //             'end_stock' => null,
        //             'meta_h1' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
        //             'description' => 'Мужские перчатки из натуральной кожи модель 031 на шерстяной подкладке',
        //             'image' => 'product_main_1591284478.jpg',
        //             'seo' => NULL,
        //             'model' => NULL,
        //             'supplier' => NULL,
        //             'public' => 1,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ),
        //     4 =>
        //         array (
        //             'id' => 5,
        //             'title' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
        //             'slug' => 'zont-zhenskiy-happy-rain-heppi-reyn-u42275-3',
        //             'category_id' => 3,
        //             'category_title' => 'Зонты',
        //             'manufacturer_id' => 5,
        //             'manufacturer_title' => 'Happy Rain',
        //             'undiscounted' => 651,
        //             'price' => 0,
        //             'vendor_code' => 58005,
        //             'ude' => null,
        //             'course' => null,
        //             'sort' => 0,
        //             'tag' => 'test',
        //             'lens_height' => null,
        //             'lens_width' => null,
        //             'bridge_width' => null,
        //             'long_arms' => null,
        //             'frame_width' => null,
        //             'type' => null,
        //             'end_stock' => null,
        //             'meta_h1' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
        //             'description' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
        //             'image' => 'product_main_1591284572.jpg',
        //             'seo' => NULL,
        //             'model' => NULL,
        //             'supplier' => NULL,
        //             'public' => 1,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ),
        //     5 =>
        //         array (
        //             'id' => 6,
        //             'title' => 'Зонт женский автомат DOPPLER модель 7106303',
        //             'slug' => 'zont-zhenskiy-avtomat-doppler-model-7106303',
        //             'category_id' => 3,
        //             'category_title' => 'Зонты',
        //             'manufacturer_id' => 4,
        //             'manufacturer_title' => 'Doppler',
        //             'undiscounted' => 819,
        //             'price' => 0,
        //             'vendor_code' => 7106303,
        //             'ude' => null,
        //             'course' => null,
        //             'sort' => 0,
        //             'tag' => 'test',
        //             'lens_height' => null,
        //             'lens_width' => null,
        //             'bridge_width' => null,
        //             'long_arms' => null,
        //             'frame_width' => null,
        //             'type' => null,
        //             'end_stock' => null,
        //             'meta_h1' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
        //             'description' => 'Зонт женский HAPPY RAIN (ХЕППИ РЭЙН) U42275-3',
        //             'image' => 'product_main_1591285587.jpg',
        //             'seo' => NULL,
        //             'model' => NULL,
        //             'supplier' => NULL,
        //             'public' => 1,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ),
        // ));

/*
        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Серьги из красного золота UZS176526',
                'slug' => 'sergi-iz-krasnogo-zolota-uzs176526',
                'category_id' => 1,
                'manufacturer_id' => 1,
                'price' => 2000,
                'new_price' => NULL,
                'type' => 'null',
                'meta_h1' => 'Серьги из красного золота UZS176526',
                'description' => '<p>Обычные серьги из красного золота</p>',
                'image' => '21927-01-0.jpg',
                'seo' => NULL,
                'public' => 1,
                'created_at' => '2019-06-24 18:15:23',
                'updated_at' => '2019-06-24 18:15:23',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Серьги из серебра M857Z',
                'slug' => 'sergi-iz-serebra-m857z',
                'category_id' => 1,
                'manufacturer_id' => 2,
                'price' => 4850,
                'new_price' => NULL,
                'type' => 'null',
                'meta_h1' => 'Серьги из серебра M857Z',
                'description' => '<p>Серьги из серебра M857Z</p>',
                'image' => '24208366_images_2256429791.jpg',
                'seo' => NULL,
                'public' => 1,
                'created_at' => '2019-06-24 18:15:23',
                'updated_at' => '2019-06-24 18:15:23',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Серьги дорогие 24',
                'slug' => 'sergi-dorogie-24',
                'category_id' => 1,
                'manufacturer_id' => 3,
                'price' => 3100,
                'new_price' => 3000,
                'type' => 'null',
                'meta_h1' => 'Серьги дорогие 24',
                'description' => '<p>Серьги дорогие 24</p>',
                'image' => 'sergi_iz_zolota_s_izumrudom_nano_pdsz66ni-16807874540487.jpg',
                'seo' => NULL,
                'public' => 1,
                'created_at' => '2019-06-24 18:15:23',
                'updated_at' => '2019-06-24 18:15:23',
            ),
        ));
        */
        
    }
}