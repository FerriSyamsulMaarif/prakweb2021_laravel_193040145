<?php

namespace Database\Seeders;


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
            'name' => 'Ferri Syamsul M',
            'email' => '193040145.ferry@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Denggo;',
            'email' => 'Denggol@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum id 
            esse eligendi inventore quod quia dicta aliquam non officiis in accusamus 
            corrupti odit expedita, repudiandae quae! Eveniet vel non eligendi, nesciunt 
            libero earum in repellendus iusto, nihil, velit ducimus perspiciatis 
            expedita at temporibus aliquam. Aliquid nobis quo dicta voluptatibus 
            debitis accusamus inventore fugit est. Dolorem maxime hic libero, qui 
            at molestias architecto nemo itaque autem recusandae optio molestiae 
            veniam doloremque blanditiis earum placeat dicta quidem laboriosam magni, 
            deleniti cum illo, reiciendis dolor. Ducimus ipsum vitae esse maiores aut, 
            odio at exercitationem.',
            'category-id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum id 
            esse eligendi inventore quod quia dicta aliquam non officiis in accusamus 
            corrupti odit expedita, repudiandae quae! Eveniet vel non eligendi, nesciunt 
            libero earum in repellendus iusto, nihil, velit ducimus perspiciatis 
            expedita at temporibus aliquam. Aliquid nobis quo dicta voluptatibus 
            debitis accusamus inventore fugit est. Dolorem maxime hic libero, qui 
            at molestias architecto nemo itaque autem recusandae optio molestiae 
            veniam doloremque blanditiis earum placeat dicta quidem laboriosam magni, 
            deleniti cum illo, reiciendis dolor. Ducimus ipsum vitae esse maiores aut, 
            odio at exercitationem.',
            'category-id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum id 
            esse eligendi inventore quod quia dicta aliquam non officiis in accusamus 
            corrupti odit expedita, repudiandae quae! Eveniet vel non eligendi, nesciunt 
            libero earum in repellendus iusto, nihil, velit ducimus perspiciatis 
            expedita at temporibus aliquam. Aliquid nobis quo dicta voluptatibus 
            debitis accusamus inventore fugit est. Dolorem maxime hic libero, qui 
            at molestias architecto nemo itaque autem recusandae optio molestiae 
            veniam doloremque blanditiis earum placeat dicta quidem laboriosam magni, 
            deleniti cum illo, reiciendis dolor. Ducimus ipsum vitae esse maiores aut, 
            odio at exercitationem.',
            'category-id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Velit soluta maxime, maiores, magnam tempore porro ullam iusto eum id 
            esse eligendi inventore quod quia dicta aliquam non officiis in accusamus 
            corrupti odit expedita, repudiandae quae! Eveniet vel non eligendi, nesciunt 
            libero earum in repellendus iusto, nihil, velit ducimus perspiciatis 
            expedita at temporibus aliquam. Aliquid nobis quo dicta voluptatibus 
            debitis accusamus inventore fugit est. Dolorem maxime hic libero, qui 
            at molestias architecto nemo itaque autem recusandae optio molestiae 
            veniam doloremque blanditiis earum placeat dicta quidem laboriosam magni, 
            deleniti cum illo, reiciendis dolor. Ducimus ipsum vitae esse maiores aut, 
            odio at exercitationem.',
            'category-id' => 2,
            'user_id' => 2
        ]);
    }
}
