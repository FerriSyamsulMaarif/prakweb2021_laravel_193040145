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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ferri Syamsul Ma'arif",
        "email" => "193040145.ferry@mail.unpas.ac.id",
        "image" => "193040145.jpg"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
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
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});