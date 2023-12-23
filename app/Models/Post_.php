<?php

namespace App\Models;


class Post
{
   private static $blog_posts = [
    [
        "title" => "Posts",
        "slug"=>"judul-posts-pertama",
        "author" => "Nayla
        
        ",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur optio totam quas unde possimus eaque alias quia doloremque
        architecto qui dolorum repellendus exercitationem voluptates assumenda excepturi quos maiores voluptatem, 
        a error laudantium voluptatibus aut mollitia! Voluptatibus assumenda exercitationem, tenetur possimus quae cum quo, 
        minima ea incidunt earum odio officiis voluptas porro magni accusantium illum nisi? Ut nihil distinctio nulla laboriosam, 
        corrupti eveniet eligendi ratione et exercitationem rerum repellat earum sed veniam provident itaque magnam amet.
         Fugit praesentium dolore accusamus nobis."
    ],
    [
        "title" => "Posts 2",
        "slug" => "judul-posts-kedua",
        "author" => "Rizka",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur optio totam quas unde possimus eaque alias quia doloremque
        architecto qui dolorum repellendus exercitationem voluptates assumenda excepturi quos maiores voluptatem, 
        a error laudantium voluptatibus aut mollitia! Voluptatibus assumenda exercitationem, tenetur possimus quae cum quo, 
        minima ea incidunt earum odio officiis voluptas porro magni accusantium illum nisi? Ut nihil distinctio nulla laboriosam, 
        corrupti eveniet eligendi ratione et exercitationem rerum repellat earum sed veniam provident itaque magnam amet.
         Fugit praesentium dolore accusamus nobis."
     ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    
}
