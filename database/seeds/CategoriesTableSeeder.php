<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('categories')->insert([
                [
                'category_name' => 'Computer',
                'category_description' => 'Alle merken computers vindt u hier'
                ],
                [
                    'category_name' => 'Televisie',
                    'category_description' => 'Alle televisies staan in deze categorie'
                ],
                [
                    'category_name' => 'Telefonie',
                    'category_description' => 'Hier vindt u alle smartphones'
                ],
                [
                    'category_name' => 'Audio',
                    'category_description' => 'Alles wat met audio te maken heeft'
                ],
                [
                    'category_name' => 'Tablets',
                    'category_description' => 'Tablets van merken zoals Apple en Samsung'
                ]
          ]);
        }
}
