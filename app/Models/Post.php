<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ferri Syamsul Ma'arif",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quia laborum et quo 
            tempora harum nesciunt eaque nulla rerum dolorum voluptates quae atque a sint quibusdam doloremque
             iste fugit veniam itaque, dolores nostrum provident commodi sunt accusantium? Officia consequuntur 
             incidunt voluptate debitis, velit vitae quaerat voluptatem. Eaque delectus officia, fugiat, corporis 
             ab voluptate odit atque cum natus commodi recusandae sed nihil aspernatur corrupti incidunt ratione maiores 
            vitae? A, ex officia vero magni deserunt dignissimos, beatae minus, illum et totam doloremque."
        ],
    
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dulmin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quia laborum et quo 
            tempora harum nesciunt eaque nulla rerum dolorum voluptates quae atque a sint quibusdam doloremque
             iste fugit veniam itaque, dolores nostrum provident commodi sunt accusantium? Officia consequuntur 
             incidunt voluptate debitis, velit vitae quaerat voluptatem. Eaque delectus officia, fugiat."
        ]
    ];

        public static function all() {
            return collect (self::$blog_posts);
        }

        public static function find($slug) {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}