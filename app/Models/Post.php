<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Ridho",
            "body" => "Hello World"
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Ridho-SAN",
            "body" => "Hello World"
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
