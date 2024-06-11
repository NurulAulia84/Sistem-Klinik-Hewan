<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nurul aulia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, praesentium earum pariatur esse provident sit, molestiae itaque similique laborum quos totam hic saepe, expedita fugit. Nam maxime alias eum explicabo nulla sunt aliquid maiores aliquam, veniam harum voluptatum incidunt, 
            esse animi non pariatur nisi, aspernatur quas perspiciatis doloribus corrupti? Dolore optio architecto accusamus ratione laudantium autem, omnis perferendis provident, quod nostrum ipsum consequatur! Non, eligendi. Eius perspiciatis eligendi suscipit facilis, 
            quibusdam sapiente voluptatem harum quod delectus at rem dolorem explicabo!"
        ],
    
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nurul aulia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, praesentium earum pariatur esse provident sit, molestiae itaque similique laborum quos totam hic saepe, expedita fugit. Nam maxime alias eum explicabo nulla sunt aliquid maiores aliquam, veniam harum voluptatum incidunt, 
            esse animi non pariatur nisi, aspernatur quas perspiciatis doloribus corrupti? Dolore optio architecto accusamus ratione laudantium autem, omnis perferendis provident, quod nostrum ipsum consequatur! Non, eligendi. Eius perspiciatis eligendi suscipit facilis, 
            quibusdam sapiente voluptatem harum quod delectus at rem dolorem explicabo!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
    //     $post = [];
    //     foreach($posts as $p) {
    //     if($p["slug"] === $slug) {
    //         $post =$p;
    //     }
    // }

    // collection
    return $posts->firstWhere('slug', $slug);
    }
}
