<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Tracanata",
            "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quibusdam quidem cumque, ipsum placeat enim at, atque perferendis commodi dignissimos quis aliquam iusto repellendus maxime explicabo quasi, illum eos modi architecto. Quidem pariatur reprehenderit, minus nisi velit ab. Expedita repellat obcaecati iure? Non neque harum quae sed doloribus ab perferendis rerum animi laudantium, tenetur nostrum saepe ducimus unde, vitae distinctio quam esse exercitationem recusandae voluptatum blanditiis molestias nobis dolor natus. Ut quisquam nobis fugiat reprehenderit, quod quo, enim accusantium quidem magni vel inventore tempore vitae. Suscipit mollitia, optio veniam doloremque quo quibusdam nobis! Adipisci, temporibus repellendus magni odit laborum ipsa."
        ],
        [
            "title" => "Post Kenakalan",
            "slug" => "post-kedua",
            "author" => "Fatra",
            "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quibusdam quidem cumque, ipsum placeat enim at, atque perferendis commodi dignissimos quis aliquam iusto repellendus maxime explicabo quasi, illum eos modi architecto. Quidem pariatur reprehenderit, minus nisi velit ab. Expedita repellat obcaecati iure? Non neque harum quae sed doloribus ab perferendis rerum animi laudantium, tenetur nostrum saepe ducimus unde, vitae distinctio quam esse exercitationem recusandae voluptatum blanditiis molestias nobis dolor natus. Ut quisquam nobis fugiat reprehenderit, quod quo, enim accusantium quidem magni vel inventore tempore vitae. Suscipit mollitia, optio veniam doloremque quo quibusdam nobis! Adipisci, temporibus repellendus magni odit laborum ipsa."
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
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}
