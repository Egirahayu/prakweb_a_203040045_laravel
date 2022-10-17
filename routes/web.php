<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => 'Mohamad Egi Rahayu',
        "email" => "egirahayu@gmail.com",
        "image" => "Egi Rahayu.JPG"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mohamad Egi Rahayu",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam corporis reiciendis optio expedita nemo. 
            Et quo fuga consequatur pariatur quisquam beatae animi, blanditiis quod inventore, sit architecto id rerum expedita eaque 
            esse error sunt quas alias exercitationem quaerat unde tenetur. Alias, et! Nisi veniam minus dolorem, cumque delectus impedit vitae?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Andre Alfarisi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ea, voluptatem obcaecati quibusdam eveniet at consectetur ratione veniam, pariatur repudiandae harum autem consequuntur nesciunt eius, facere similique et? Dolorem dolore optio sed 
            error beatae cum consequatur obcaecati mollitia, iure minus quaerat sit recusandae provident. Sapiente quasi numquam laboriosam enim tenetur facilis voluptatibus adipisci vitae perspiciatis harum sunt ut eum fugiat accusamus, quibusdam pariatur quidem consectetur 
            perferendis aliquid cupiditate! Praesentium ex fugiat blanditiis beatae odit recusandae rerum totam atque exercitationem, reiciendis officiis sit modi eaque tenetur unde voluptas! Accusamus natus reiciendis obcaecati exercitationem, vitae, earum quasi pariatur, 
            maxime sed aliquid libero!"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mohamad Egi Rahayu",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam corporis reiciendis optio expedita nemo. 
            Et quo fuga consequatur pariatur quisquam beatae animi, blanditiis quod inventore, sit architecto id rerum expedita eaque 
            esse error sunt quas alias exercitationem quaerat unde tenetur. Alias, et! Nisi veniam minus dolorem, cumque delectus impedit vitae?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Andre Alfarisi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ea, voluptatem obcaecati quibusdam eveniet at consectetur ratione veniam, pariatur repudiandae harum autem consequuntur nesciunt eius, facere similique et? Dolorem dolore optio sed 
            error beatae cum consequatur obcaecati mollitia, iure minus quaerat sit recusandae provident. Sapiente quasi numquam laboriosam enim tenetur facilis voluptatibus adipisci vitae perspiciatis harum sunt ut eum fugiat accusamus, quibusdam pariatur quidem consectetur 
            perferendis aliquid cupiditate! Praesentium ex fugiat blanditiis beatae odit recusandae rerum totam atque exercitationem, reiciendis officiis sit modi eaque tenetur unde voluptas! Accusamus natus reiciendis obcaecati exercitationem, vitae, earum quasi pariatur, 
            maxime sed aliquid libero!"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
