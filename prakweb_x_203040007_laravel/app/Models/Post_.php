<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
            [
                "title" => "judul post pertama",
                "slug" => "judul-post-pertama",
                "author" => "Falz",
                "body" => "Lorem ipsum dolor sit amet, consectetur 
                adipisicing elit. Nesciunt explicabo ipsa expedita, alias aliquid molestias voluptas laboriosam quam neque. Possimus quam veritatis similique sapiente suscipit repudiandae voluptatum, rem commodi
                exercitationem corrupti necessitatibus illo debitis, nesciunt accusantium. Ea molestias praesentium fugiat quas libero quam suscipit placeat eum incidunt provident est quaerat, reiciendis doloribus esse omnis quasi soluta excepturi autem deleniti? Vero ad sit, corporis earum impedit voluptatum provident 
                quibusdam, eligendi optio assumenda minus a temporibus commodi dolores magni expedita praesentium rem."
            ],
        
            [
                "title" => "judul post kedua",
                "slug" => "judul-post-kedua",
                "author" => "Dodi",
                "body" => "Lorem ipsum dolor sit amet, consectetur 
                adipisicing elit. Nesciunt explicabo ipsa expedita, alias aliquid molestias voluptas laboriosam quam neque. 
                Possimus quam veritatis similique sapiente suscipit repudiandae voluptatum, rem commodi"
            ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            //$post =[];
            //foreach($posts as $p) {
            //    if($p["slug"] === $slug) {
            //       $post = $p;
            //  }
            //}
            return $posts->firstWhere('slug', $slug);
        }
}