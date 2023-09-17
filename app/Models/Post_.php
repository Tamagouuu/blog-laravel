<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'author' => 'Made Tama',
            'slug' => 'judul-post-pertama',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam alias commodi rerum nulla ipsum tempore laudantium! Odit tenetur ducimus laboriosam cupiditate debitis. Culpa quis aliquid ipsam nostrum, itaque nisi minima pariatur aperiam unde autem quasi voluptates veritatis ipsa velit neque cupiditate incidunt ducimus sequi officiis perferendis totam. Veritatis blanditiis atque dolor hic animi porro itaque, mollitia expedita iste fugit impedit excepturi explicabo quos qui necessitatibus est soluta accusantium dolores delectus iusto ipsum voluptatibus? Commodi inventore, error animi voluptatum dolores id!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'author' => 'Tama Tizy',
            'slug' => 'judul-post-kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus incidunt porro laboriosam hic omnis sit, fugit excepturi doloribus enim alias? Voluptates mollitia accusamus itaque aliquid odit veniam delectus deleniti nobis hic, tempora quam, iste totam ullam explicabo suscipit quis, omnis architecto repudiandae? Maxime, dolorem tempore magnam corporis ullam error quae cum nam ipsam fugit sunt repellat. Libero aspernatur minus unde quasi nostrum, eveniet laboriosam mollitia quod, fugit, saepe nesciunt rem numquam molestias quo voluptatum nulla est ad perferendis sit in officia totam temporibus. Ipsam, eveniet inventore nihil sapiente dolorem cum porro voluptatibus aut a libero sed doloremque aliquam ut.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
