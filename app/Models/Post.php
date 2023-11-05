<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Juan",
            "slug" => "Judul-Post Pertama",
            "author" => "Juan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti maxime, quibusdam quidem, non temporibus sint consequatur repellat assumenda laborum quasi explicabo officiis quis iusto? Odit doloremque aperiam neque nulla."
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
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
