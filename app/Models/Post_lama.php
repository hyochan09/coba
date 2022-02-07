<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Layly",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt id veritatis totam. Minus quia ipsa recusandae veniam ducimus consectetur corporis natus nihil deleniti a facilis accusamus voluptas illo itaque cum odit sint sed blanditiis delectus amet ea tempore, deserunt distinctio atque! Sapiente saepe sequi consequuntur ab consectetur, eaque praesentium voluptatem expedita necessitatibus commodi in temporibus obcaecati amet animi iste, eos impedit placeat debitis. Sint libero corporis ducimus nam, animi laudantium iure commodi aspernatur beatae debitis provident placeat necessitatibus fugiat alias maiores ad qui quos quia eum in repudiandae dolorum minima ipsum. Illo, beatae blanditiis! Porro est nobis quos voluptates hic?"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ly",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam ab deleniti architecto at numquam, voluptatum quia reiciendis ut illo provident doloribus soluta commodi tenetur quibusdam inventore laborum nesciunt. Quia eos pariatur magni officiis repellendus mollitia rerum. Aperiam ratione suscipit reprehenderit. Aspernatur ipsam nisi provident enim minima beatae blanditiis id nihil repellendus, quasi nesciunt ea est reprehenderit architecto nemo rem obcaecati quisquam saepe aut. Mollitia autem expedita quaerat. Exercitationem adipisci quidem nobis obcaecati placeat eligendi sint, magni ullam provident iste voluptatem possimus quas corrupti quia rerum enim consectetur maxime, dolores iure minima soluta nemo quod. Mollitia explicabo incidunt suscipit aperiam veniam magnam laboriosam dolorem nihil deserunt? Repellat ducimus illo, nihil, aliquid incidunt tempora corporis odit ea sunt excepturi omnis fuga vero hic? Ea repellendus distinctio consequuntur illo ad magni itaque sunt, repudiandae odio suscipit eum, sint eius provident consequatur recusandae delectus. Repudiandae autem exercitationem, labore natus sapiente nesciunt neque sed ducimus eos dignissimos dolorem quisquam odio maiores quibusdam odit veritatis tempora, non aspernatur error corrupti debitis voluptas! Est quasi dolore molestias aspernatur maiores voluptatum fuga laboriosam doloribus, deleniti aliquam dolor blanditiis similique voluptate nesciunt a quam, minus necessitatibus explicabo corrupti. Repudiandae assumenda ab, sed soluta molestias voluptates! Dolorem maiores dicta recusandae."
        ]
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
