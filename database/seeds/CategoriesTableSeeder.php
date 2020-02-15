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
        App\Categories::create([
            'category_name' => 'php',
            'slug' => 'newphp',
            'category_id' => '1',
            'user_id' => '1',
        ]);
    }
}
