<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
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

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find($slug)
  {
    $posts = static::all();

    // $post = [];
    // foreach ($posts as $p) {
    //   if ($p["slug"] === $slug) {
    //     $post = $p;
    //   }
    // }

    return $posts->firstWhere('slug', $slug);
  }
}
