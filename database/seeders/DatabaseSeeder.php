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
        User::factory(3)->create();

        Category::create([
            'namecat' => 'Web Programming',
            'slugcat' => 'web-programming'
        ]);

        Category::create([
            'namecat' => 'Web Design',
            'slugcat' => 'web-design'
        ]);

        Category::create([
            'namecat' => 'Personal',
            'slugcat' => 'personal'
        ]);

        Post::factory(30)->create();
        
        // User::create([
        //     'name' => 'Hyorin Murasaki',
        //     'email' => 'hyochan_09@yahoo.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'LNQ',
        //     'email' => 'lnq@yahoo.com',
        //     'password' => bcrypt('12345')
        // ]);



        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'readmore' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis natus molestias dolore ad, deserunt dicta, in hic ipsum quidem, assumenda libero unde tenetur ratione vel sequi? Magnam placeat cum architecto omnis voluptate eligendi sed iusto aliquam laborum a ex, consequatur impedit deleniti ipsam commodi dolore velit voluptatum. Suscipit officiis eos aut eveniet, laborum dignissimos minus dolor quam temporibus? Dolore, eius sequi? Ipsam harum incidunt, consectetur aperiam commodi perferendis delectus numquam possimus corporis velit placeat facere voluptate obcaecati quam sequi, voluptatum earum itaque. Quos alias, blanditiis ipsum quasi adipisci praesentium odit repudiandae explicabo repellat assumenda voluptatum quaerat pariatur eligendi corrupti perferendis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'readmore' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis natus molestias dolore ad, deserunt dicta, in hic ipsum quidem, assumenda libero unde tenetur ratione vel sequi? Magnam placeat cum architecto omnis voluptate eligendi sed iusto aliquam laborum a ex, consequatur impedit deleniti ipsam commodi dolore velit voluptatum. Suscipit officiis eos aut eveniet, laborum dignissimos minus dolor quam temporibus? Dolore, eius sequi? Ipsam harum incidunt, consectetur aperiam commodi perferendis delectus numquam possimus corporis velit placeat facere voluptate obcaecati quam sequi, voluptatum earum itaque. Quos alias, blanditiis ipsum quasi adipisci praesentium odit repudiandae explicabo repellat assumenda voluptatum quaerat pariatur eligendi corrupti perferendis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'readmore' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis natus molestias dolore ad, deserunt dicta, in hic ipsum quidem, assumenda libero unde tenetur ratione vel sequi? Magnam placeat cum architecto omnis voluptate eligendi sed iusto aliquam laborum a ex, consequatur impedit deleniti ipsam commodi dolore velit voluptatum. Suscipit officiis eos aut eveniet, laborum dignissimos minus dolor quam temporibus? Dolore, eius sequi? Ipsam harum incidunt, consectetur aperiam commodi perferendis delectus numquam possimus corporis velit placeat facere voluptate obcaecati quam sequi, voluptatum earum itaque. Quos alias, blanditiis ipsum quasi adipisci praesentium odit repudiandae explicabo repellat assumenda voluptatum quaerat pariatur eligendi corrupti perferendis!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'readmore' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis natus molestias dolore ad, deserunt dicta, in hic ipsum quidem, assumenda libero unde tenetur ratione vel sequi? Magnam placeat cum architecto omnis voluptate eligendi sed iusto aliquam laborum a ex, consequatur impedit deleniti ipsam commodi dolore velit voluptatum. Suscipit officiis eos aut eveniet, laborum dignissimos minus dolor quam temporibus? Dolore, eius sequi? Ipsam harum incidunt, consectetur aperiam commodi perferendis delectus numquam possimus corporis velit placeat facere voluptate obcaecati quam sequi, voluptatum earum itaque. Quos alias, blanditiis ipsum quasi adipisci praesentium odit repudiandae explicabo repellat assumenda voluptatum quaerat pariatur eligendi corrupti perferendis!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
