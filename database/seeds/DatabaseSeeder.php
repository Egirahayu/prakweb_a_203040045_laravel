<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Egi Rahayu',
            'email' => 'egirahayu@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Andre',
            'email' => 'andre@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, laboriosam, accusantium saepe soluta dolore alias sunt cum minus minima beatae repellendus accusamus consequuntur a eaque? Cumque vero illo ea modi.'
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, laboriosam, accusantium saepe soluta dolore alias sunt cum minus minima beatae repellendus accusamus consequuntur a eaque? Cumque vero illo ea modi.'
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, laboriosam, accusantium saepe soluta dolore alias sunt cum minus minima beatae repellendus accusamus consequuntur a eaque? Cumque vero illo ea modi.'
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, laboriosam, accusantium saepe soluta dolore alias sunt cum minus minima beatae repellendus accusamus consequuntur a eaque? Cumque vero illo ea modi.'
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
