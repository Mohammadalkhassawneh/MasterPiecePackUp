<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category_name' => 'Men Shirts',
                // 'category_desc' => 'Irbid (Arabic: إِربِد), known in ancient times as Arabella or Arbela (Άρβηλα in Ancient Greek), is the capital and largest city of the Irbid Governorate. It also has the second largest metropolitan population in Jordan after Amman',
                'category_img' => 'shirts.jpg'

            ],
            [
                'category_name' => 'Men Pants',
                // 'category_desc' => 'Amman, Arabic ʿAmmān, biblical Hebrew Rabbath Ammon, ancient Greek Philadelphia, capital and largest city of Jordan. It is the residence of the king and the seat of government. ... Amman\'s focus of settlement throughout history has been the small high triangular plateau (modern Mount Al-Qalʿah) just north of the wadi.',
                'category_img' => 'pants.jpg'

            ],
            [
                'category_name' => 'Men Shoes',
                // 'category_desc' => 'Jerash (or Gerasa) is an ancient city in Jordan located 48km (30 miles) north of the capital, Amman (map). Famous as being one of the best preserved Greco-Roman cities in the Middle East, Jerash is one of the top attractions in Jordan (alongside Petra) and is certainly a must-visit. ... The old and the new of Jerash.',
                'category_img' => 'shoes.jpg'


            ],
            [
                'category_name' => 'Men Jackets',
                // 'category_desc' => 'Ajloun Castle, medieval name Qalʻat ar-Rabad, is a 12th-century Muslim castle situated in northwestern Jordan. It is placed on a hilltop belonging to the Mount Ajloun district, also known as Jabal \'Auf after a Bedouin tribe which had captured the area in the 12th century',
                'category_img' => 'jackets.jpeg'

            ],
            [
                'category_name' => 'Women Shirts',
                // 'category_desc' => 'Irbid (Arabic: إِربِد), known in ancient times as Arabella or Arbela (Άρβηλα in Ancient Greek), is the capital and largest city of the Irbid Governorate. It also has the second largest metropolitan population in Jordan after Amman',
                'category_img' => 'womenshirts.jpg'

            ],
            [
                'category_name' => 'Women Pants',
                // 'category_desc' => 'Amman, Arabic ʿAmmān, biblical Hebrew Rabbath Ammon, ancient Greek Philadelphia, capital and largest city of Jordan. It is the residence of the king and the seat of governWoment. ... Amman\'s focus of settleWoment throughout history has been the small high triangular plateau (modern Mount Al-Qalʿah) just north of the wadi.',
                'category_img' => 'womenpants.jpg'

            ],
            [
                'category_name' => 'Women Shoes',
                // 'category_desc' => 'Jerash (or Gerasa) is an ancient city in Jordan located 48km (30 miles) north of the capital, Amman (map). Famous as being one of the best preserved Greco-Roman cities in the Middle East, Jerash is one of the top attractions in Jordan (alongside Petra) and is certainly a must-visit. ... The old and the new of Jerash.',
                'category_img' => 'womenshoes.jpg'


            ],
            [
                'category_name' => 'Women Jackets',
                // 'category_desc' => 'Ajloun Castle, medieval name Qalʻat ar-Rabad, is a 12th-century Muslim castle situated in northwestern Jordan. It is placed on a hilltop belonging to the Mount Ajloun district, also known as Jabal \'Auf after a Bedouin tribe which had captured the area in the 12th century',
                'category_img' => 'womenjackets.jpg'

            ],
            [
                'category_name' => 'Accessories',
                // 'category_desc' => 'Ajloun Castle, medieval name Qalʻat ar-Rabad, is a 12th-century Muslim castle situated in northwestern Jordan. It is placed on a hilltop belonging to the Mount Ajloun district, also known as Jabal \'Auf after a Bedouin tribe which had captured the area in the 12th century',
                'category_img' => 'accesories.jpg'

            ],
            [
                'category_name' => 'Free Products',
                // 'category_desc' => 'Ajloun Castle, medieval name Qalʻat ar-Rabad, is a 12th-century Muslim castle situated in northwestern Jordan. It is placed on a hilltop belonging to the Mount Ajloun district, also known as Jabal \'Auf after a Bedouin tribe which had captured the area in the 12th century',
                'category_img' => 'free.jpg'

            ],

        ]);
    }
}