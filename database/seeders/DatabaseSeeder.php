<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Egi Rahayu',
        //     'email' => 'egirahayu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Andre Alfarisi',
        //     'email' => 'andrealfarisi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::factory(5)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores, ea quod nostrum assumenda nulla eaque officia necessitatibus iusto quis sequi veritatis animi dolorem, corrupti aliquam? Quidem in asperiores minima error facilis maxime necessitatibus ipsa, a et ullam, voluptates quod, quaerat excepturi sapiente? Tempore eos rem nobis architecto dicta temporibus voluptas ipsum nulla fuga officiis vero, ad, non eligendi magni odio neque molestias. Iste beatae porro, cupiditate mollitia natus temporibus nobis! Labore fugiat repellat voluptatem veniam harum autem? Fuga ea maxime velit, esse ullam commodi perferendis beatae expedita tempore quae. Eius architecto quibusdam commodi ducimus dolorum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores, ea quod nostrum assumenda nulla eaque officia necessitatibus iusto quis sequi veritatis animi dolorem, corrupti aliquam? Quidem in asperiores minima error facilis maxime necessitatibus ipsa, a et ullam, voluptates quod, quaerat excepturi sapiente? Tempore eos rem nobis architecto dicta temporibus voluptas ipsum nulla fuga officiis vero, ad, non eligendi magni odio neque molestias. Iste beatae porro, cupiditate mollitia natus temporibus nobis! Labore fugiat repellat voluptatem veniam harum autem? Fuga ea maxime velit, esse ullam commodi perferendis beatae expedita tempore quae. Eius architecto quibusdam commodi ducimus dolorum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores, ea quod nostrum assumenda nulla eaque officia necessitatibus iusto quis sequi veritatis animi dolorem, corrupti aliquam? Quidem in asperiores minima error facilis maxime necessitatibus ipsa, a et ullam, voluptates quod, quaerat excepturi sapiente? Tempore eos rem nobis architecto dicta temporibus voluptas ipsum nulla fuga officiis vero, ad, non eligendi magni odio neque molestias. Iste beatae porro, cupiditate mollitia natus temporibus nobis! Labore fugiat repellat voluptatem veniam harum autem? Fuga ea maxime velit, esse ullam commodi perferendis beatae expedita tempore quae. Eius architecto quibusdam commodi ducimus dolorum.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iure. Labore nam fugiat asperiores, ea quod nostrum assumenda nulla eaque officia necessitatibus iusto quis sequi veritatis animi dolorem, corrupti aliquam? Quidem in asperiores minima error facilis maxime necessitatibus ipsa, a et ullam, voluptates quod, quaerat excepturi sapiente? Tempore eos rem nobis architecto dicta temporibus voluptas ipsum nulla fuga officiis vero, ad, non eligendi magni odio neque molestias. Iste beatae porro, cupiditate mollitia natus temporibus nobis! Labore fugiat repellat voluptatem veniam harum autem? Fuga ea maxime velit, esse ullam commodi perferendis beatae expedita tempore quae. Eius architecto quibusdam commodi ducimus dolorum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
