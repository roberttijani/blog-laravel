<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Robert Tijani S",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt possimus rerum consequatur fugit voluptatum debitis nobis voluptas ipsa delectus
            quisquam pariatur iure facilis eligendi dolore, dicta ducimus voluptatibus dignissimos dolores nesciunt esse eum. Nesciunt inventore temporibus distinctio tempora,
            maiores eius ut natus. Delectus culpa qui impedit, tenetur dicta, fuga vero repudiandae fugit deserunt, consectetur quasi nisi tempore soluta maiores earum commodi
            est corrupti quia iste enim? Natus rerum sapiente quisquam ullam eveniet eius eaque ipsum dicta libero. Quis, debitis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Wildan Fauzi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore animi ipsum quibusdam voluptatibus consectetur cumque, amet voluptates facilis ipsa,
            vitae repudiandae obcaecati quisquam quo natus. Sed illum placeat numquam repudiandae facere, ullam consequuntur doloribus repellendus corrupti iste adipisci
            exercitationem, beatae incidunt? Doloremque nihil incidunt adipisci ea optio, est perspiciatis? Praesentium, animi, possimus quisquam eligendi quaerat fuga vitae aliquid
            perferendis explicabo, soluta tenetur dolorem unde officiis recusandae quis esse minus maiores exercitationem itaque omnis architecto. Temporibus odio sint nesciunt!
            Commodi sed ipsam delectus quae qui explicabo totam rem quasi dicta officia!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
