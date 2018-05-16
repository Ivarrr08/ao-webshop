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
        if (DB::table('categories')->get()->count() == 0) {

            DB::table('categories')->insert([
                'category_name' => 'Computer'
            ],
                [
                    'category_name' => 'Televisie'
                ],
                [
                    'category_name' => 'Telefonie'
                ],
                [
                    'category_name' => 'Audio'
                ],
                [
                    'category_name' => 'Tablets'
                ]);
        }
    }
}
