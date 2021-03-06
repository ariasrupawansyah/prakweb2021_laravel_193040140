<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = 
   [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aria Rupawansyah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque libero earum debitis officiis, est sapiente, nemo aspernatur tempora hic perspiciatis ducimus, culpa expedita necessitatibus quibusdam architecto! Libero asperiores neque temporibus dolore beatae autem optio modi recusandae dolorum minima at deleniti mollitia omnis facilis natus, impedit culpa. Necessitatibus non modi repudiandae nesciunt, esse sapiente magnam a at magni accusantium, consequatur, sed officiis libero eum alias. Dolor accusantium, cupiditate libero consectetur facere unde mollitia, illum quam omnis tempore nisi iste dolorem molestias."
        ],
        [
            "title" => "Judul Post Aria",
            "slug" => "judul-post-kedua",
            "author" => "FIS",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt et unde velit asperiores eligendi? Delectus, vel. Dolor repudiandae veritatis ipsam sit eaque perferendis officiis harum, porro repellat, eveniet fuga odit ratione provident sequi assumenda quasi nihil. Dolores architecto, labore cupiditate consectetur exercitationem iure nemo? Ex repellat accusamus libero, culpa quae nihil reprehenderit. Voluptatem ab a ipsam porro, adipisci fuga ducimus quod expedita accusamus ea similique enim maiores nobis nihil distinctio tempore. Ea debitis hic harum assumenda nostrum, esse sapiente aut saepe corporis atque accusantium iure dolorem amet odio earum quisquam optio laboriosam illo perferendis dignissimos itaque sequi iste recusandae! Doloribus!"
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
