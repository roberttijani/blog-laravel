<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Robert Tijani S',
            'email' => 'roberttijani87@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Wildan Firdausi',
            'email' => 'wildanfiradusi@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quidem nulla expedita aut pariatur perspiciatis magni quia quisquam debitis aliquam aperiam unde eveniet obcaecati quasi dolorem sapiente sit ut, repellat doloremque. Perspiciatis quod voluptate in doloribus dicta eos obcaecati repellat magnam consequuntur, officiis dolorum reiciendis voluptatibus possimus deserunt ea culpa beatae corrupti neque modi veniam similique deleniti suscipit! Non sapiente corporis nobis repudiandae? Harum eius perspiciatis blanditiis cum, fuga ducimus consectetur pariatur doloremque obcaecati voluptatum amet quos velit, voluptate nemo alias? Eos magnam, ut accusamus ex libero ipsam officiis aliquid quas esse temporibus recusandae ratione voluptas consectetur similique ducimus expedita.',
            'category_id' => 1,
            'user_id' => 1,

        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quidem nulla expedita aut pariatur perspiciatis magni quia quisquam debitis aliquam aperiam unde eveniet obcaecati quasi dolorem sapiente sit ut, repellat doloremque. Perspiciatis quod voluptate in doloribus dicta eos obcaecati repellat magnam consequuntur, officiis dolorum reiciendis voluptatibus possimus deserunt ea culpa beatae corrupti neque modi veniam similique deleniti suscipit! Non sapiente corporis nobis repudiandae? Harum eius perspiciatis blanditiis cum, fuga ducimus consectetur pariatur doloremque obcaecati voluptatum amet quos velit, voluptate nemo alias? Eos magnam, ut accusamus ex libero ipsam officiis aliquid quas esse temporibus recusandae ratione voluptas consectetur similique ducimus expedita.',
            'category_id' => 1,
            'user_id' => 1,

        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quidem nulla expedita aut pariatur perspiciatis magni quia quisquam debitis aliquam aperiam unde eveniet obcaecati quasi dolorem sapiente sit ut, repellat doloremque. Perspiciatis quod voluptate in doloribus dicta eos obcaecati repellat magnam consequuntur, officiis dolorum reiciendis voluptatibus possimus deserunt ea culpa beatae corrupti neque modi veniam similique deleniti suscipit! Non sapiente corporis nobis repudiandae? Harum eius perspiciatis blanditiis cum, fuga ducimus consectetur pariatur doloremque obcaecati voluptatum amet quos velit, voluptate nemo alias? Eos magnam, ut accusamus ex libero ipsam officiis aliquid quas esse temporibus recusandae ratione voluptas consectetur similique ducimus expedita.',
            'category_id' => 2,
            'user_id' => 1,

        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quidem nulla expedita aut pariatur perspiciatis magni quia quisquam debitis aliquam aperiam unde eveniet obcaecati quasi dolorem sapiente sit ut, repellat doloremque. Perspiciatis quod voluptate in doloribus dicta eos obcaecati repellat magnam consequuntur, officiis dolorum reiciendis voluptatibus possimus deserunt ea culpa beatae corrupti neque modi veniam similique deleniti suscipit! Non sapiente corporis nobis repudiandae? Harum eius perspiciatis blanditiis cum, fuga ducimus consectetur pariatur doloremque obcaecati voluptatum amet quos velit, voluptate nemo alias? Eos magnam, ut accusamus ex libero ipsam officiis aliquid quas esse temporibus recusandae ratione voluptas consectetur similique ducimus expedita.',
            'category_id' => 2,
            'user_id' => 2,

        ]);


    }


}
