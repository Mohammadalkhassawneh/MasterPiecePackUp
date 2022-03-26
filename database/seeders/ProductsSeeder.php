<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            //Amman
            // [
            //     'name' => 'H&M Women shirt',
            //     // 'description' => 'Amman Citadel is a palce in amman in northern Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     // 'date' => '2022-01-29 00:00:00',
            //     // 'days' => 5,
            //     'category_id' => 5,
            //     'price' => 5,
            //     // 'max_visitors' => 20,
            //     // 'minimum_age' => 18,
            //     'image' => 'women/shirts/womenshirts1.jpg',
            //     'seller_id' => 3
            // ],
            [
                'name' => 'H&M Women shirt',
                'category_id' => 5,
                'price' => 5,
                'size' => 'S',
                'image' => 'women/shirts/womenshirts7.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'CalvinKlein Women shirt',
                'category_id' => 5,
                'price' => 5,
                'size' => 'M',
                'image' => 'women/shirts/womenshirts2.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Atmosphere Women shirt',
                'category_id' => 5,
                'price' => 5,
                'size' => 'L',
                'image' => 'women/shirts/womenshirts3.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Zara Women shirt',
                'category_id' => 5,
                'price' => 4,
                'size' => 'M',
                'image' => 'women/shirts/womenshirts4.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'TommyHillFigger Women shirt',
                'category_id' => 5,
                'price' => 7,
                'size' => 'L',
                'image' => 'women/shirts/womenshirts5.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Mango Women shirt',
                'category_id' => 5,
                'price' => 5,
                'size' => 'XL',
                'image' => 'women/shirts/womenshirts6.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Levis Women Pant',
                'category_id' => 6,
                'price' => 8,
                'size' => 'S',
                'image' => 'women/pants/womenpants1.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Polo Women Pant',
                'category_id' => 6,
                'price' => 5,
                'size' => 'M',
                'image' => 'women/pants/womenpants2.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'American Eagle Women Pant',
                'category_id' => 6,
                'price' => 8,
                'size' => 'XL',
                'image' => 'women/pants/womenpants3.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Mango Women Pant',
                'category_id' => 6,
                'price' => 5,
                'size' => 'XL',
                'image' => 'women/pants/womenpants4.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'CalvinKlein Women Pant',
                'category_id' => 6,
                'price' => 5,
                'size' => 'XL',
                'image' => 'women/pants/womenpants5.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Diesel Women Pant',
                'category_id' => 6,
                'price' => 10,
                'size' => 'S',
                'image' => 'women/pants/womenpants6.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Zara Women Shoes',
                'category_id' => 7,
                'price' => 10,
                'size' => '36',
                'image' => 'women/shoes/womenshoes1.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Vans Women Shoes',
                'category_id' => 7,
                'price' => 10,
                'size' => '38',
                'image' => 'women/shoes/womenshoes2.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Adidas Women Shoes',
                'category_id' => 7,
                'price' => 10,
                'size' => '40',
                'image' => 'women/shoes/womenshoes3.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Nike Women Shoes',
                'category_id' => 7,
                'price' => 10,
                'size' => '43',
                'image' => 'women/shoes/womenshoes4.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Uggs Women Shoes',
                'category_id' => 7,
                'price' => 10,
                'size' => '36',
                'image' => 'women/shoes/womenshoes5.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Zara Women Shoes',
                'category_id' => 7,
                'price' => 10,
                'size' => '41',
                'image' => 'women/shoes/womenshoes6.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Zara Women Jacket',
                'category_id' => 8,
                'price' => 12,
                'size' => 'M',
                'image' => 'women/jackets/womenjackets1.png',
                'seller_id' => 3
            ],
            [
                'name' => 'MassimoDutti Women Jacket',
                'category_id' => 8,
                'price' => 12,
                'size' => 'L',
                'image' => 'women/jackets/womenjackets2.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Bershka Women Jacket',
                'category_id' => 8,
                'price' => 12,
                'size' => 'S',
                'image' => 'women/jackets/womenjackets3.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Gap Women Jacket',
                'category_id' => 8,
                'price' => 14,
                'size' => 'M',
                'image' => 'women/jackets/womenjackets4.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Nike Women Jacket',
                'category_id' => 8,
                'price' => 10,
                'size' => 'M',
                'image' => 'women/jackets/womenjackets5.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'LV Women Jacket',
                'category_id' => 8,
                'price' => 13,
                'size' => 'M',
                'image' => 'women/jackets/womenjackets6.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'H&M Men shirt',
                'category_id' => 1,
                'price' => 5,
                'size' => 'S',
                'image' => 'men/shirts/menshirts1.png',
                'seller_id' => 3
            ],
            [
                'name' => 'CalvinKlein men shirt',
                'category_id' => 1,
                'price' => 5,
                'size' => 'M',
                'image' => 'men/shirts/menshirts2.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Atmosphere men shirt',
                'category_id' => 1,
                'price' => 5,
                'size' => 'L',
                'image' => 'men/shirts/menshirts3.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Zara men shirt',
                'category_id' => 1,
                'price' => 4,
                'size' => 'M',
                'image' => 'men/shirts/menshirts4.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'TommyHillFigger men shirt',
                'category_id' => 1,
                'price' => 7,
                'size' => 'L',
                'image' => 'men/shirts/menshirts5.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Mango men shirt',
                'category_id' => 1,
                'price' => 5,
                'size' => 'XL',
                'image' => 'men/shirts/menshirts6.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Levis men Pant',
                'category_id' => 2,
                'price' => 8,
                'size' => 'S',
                'image' => 'men/pants/menpants1.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Polo men Pant',
                'category_id' => 2,
                'price' => 5,
                'size' => 'M',
                'image' => 'men/pants/menpants2.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'American Eagle men Pant',
                'category_id' => 2,
                'price' => 8,
                'size' => 'XL',
                'image' => 'men/pants/menpants3.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Mango men Pant',
                'category_id' => 2,
                'price' => 5,
                'size' => 'XL',
                'image' => 'men/pants/menpants4.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'CalvinKlein men Pant',
                'category_id' => 2,
                'price' => 5,
                'size' => 'XL',
                'image' => 'men/pants/menpants5.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Diesel men Pant',
                'category_id' => 2,
                'price' => 10,
                'size' => 'S',
                'image' => 'men/pants/menpants6.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Zara men Shoes',
                'category_id' => 3,
                'price' => 10,
                'size' => '36',
                'image' => 'men/shoes/menshoes1.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Vans men Shoes',
                'category_id' => 3,
                'price' => 10,
                'size' => '38',
                'image' => 'men/shoes/menshoes2.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Adidas men Shoes',
                'category_id' => 3,
                'price' => 10,
                'size' => '40',
                'image' => 'men/shoes/menshoes3.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Nike men Shoes',
                'category_id' => 3,
                'price' => 10,
                'size' => '43',
                'image' => 'men/shoes/menshoes4.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Uggs men Shoes',
                'category_id' => 3,
                'price' => 10,
                'size' => '36',
                'image' => 'men/shoes/menshoes5.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Zara men Shoes',
                'category_id' => 3,
                'price' => 10,
                'size' => '41',
                'image' => 'men/shoes/menshoes6.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Zara men Jacket',
                'category_id' => 4,
                'price' => 12,
                'size' => 'M',
                'image' => 'men/jackets/menjackets1.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'MassimoDutti men Jacket',
                'category_id' => 4,
                'price' => 12,
                'size' => 'L',
                'image' => 'men/jackets/menjackets2.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Bershka men Jacket',
                'category_id' => 4,
                'price' => 12,
                'size' => 'S',
                'image' => 'men/jackets/menjackets3.jpg',
                'seller_id' => 3
            ],
            [
                'name' => 'Gap men Jacket',
                'category_id' => 4,
                'price' => 14,
                'size' => 'M',
                'image' => 'men/jackets/menjackets4.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'Nike men Jacket',
                'category_id' => 4,
                'price' => 10,
                'size' => 'M',
                'image' => 'men/jackets/menjackets5.jpg',
                'seller_id' => 4
            ],
            [
                'name' => 'LV men Jacket',
                'category_id' => 4,
                'price' => 13,
                'size' => 'M',
                'image' => 'men/jackets/menjackets6.jpg',
                'seller_id' => 4
            ],



        ]);
    }
}