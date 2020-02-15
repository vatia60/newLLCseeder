<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Posts::create([
            'title' => 'This is first title',
            'content' => 'This is first content. This is first content. This is first content. This is first content. This is first content.This is first content. This is first content. This is first content. This is first content. This is first content.',
        ]);
    }
}
