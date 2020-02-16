<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         /* $this->call(BookTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(PostsTableSeeder::class); */

         factory(\App\Book::class, 10)->create();
         factory(\App\Posts::class, 10)->create();
         factory(\App\Categories::class, 10)->create();


    }
}
