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
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Doni Salmanan',
        //     'email' => 'asdas@asdas.cc',
        //     'password' => bcrypt('123123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-P'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'W-Design'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'Programming'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul 1',
        //     'slug' => 'judul-1',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto amet pariatur, repudiandae quibusdam quia modi et optio sapiente assumenda beatae voluptate sunt ducimus velit quod qui eum, rerum nulla earum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni corrupti velit dolore, optio voluptates quas ratione architecto ut quidem fugit atque asperiores amet. Mollitia quas, alias rerum officia iusto porro.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul 2',
        //     'slug' => 'judul-2',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto amet pariatur, repudiandae quibusdam quia modi et optio sapiente assumenda beatae voluptate sunt ducimus velit quod qui eum, rerum nulla earum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni corrupti velit dolore, optio voluptates quas ratione architecto ut quidem fugit atque asperiores amet. Mollitia quas, alias rerum officia iusto porro.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul 3',
        //     'slug' => 'judul-3',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto amet pariatur, repudiandae quibusdam quia modi et optio sapiente assumenda beatae voluptate sunt ducimus velit quod qui eum, rerum nulla earum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni corrupti velit dolore, optio voluptates quas ratione architecto ut quidem fugit atque asperiores amet. Mollitia quas, alias rerum officia iusto porro.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // User::create([
        //     'name' => 'Aasdasda',
        //     'email' => 'asdasdas@asda.cc',
        //     'password' => bcrypt('123123')
        // ]);

        // Post::create([
        //     'title' => 'Judul 1',
        //     'slug' => 'judul-1',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto amet pariatur, repudiandae quibusdam quia modi et optio sapiente assumenda beatae voluptate sunt ducimus velit quod qui eum, rerum nulla earum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni corrupti velit dolore, optio voluptates quas ratione architecto ut quidem fugit atque asperiores amet. Mollitia quas, alias rerum officia iusto porro.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul 2',
        //     'slug' => 'judul-2',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto amet pariatur, repudiandae quibusdam quia modi et optio sapiente assumenda beatae voluptate sunt ducimus velit quod qui eum, rerum nulla earum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni corrupti velit dolore, optio voluptates quas ratione architecto ut quidem fugit atque asperiores amet. Mollitia quas, alias rerum officia iusto porro.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul 3',
        //     'slug' => 'judul-3',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto amet pariatur, repudiandae quibusdam quia modi et optio sapiente assumenda beatae voluptate sunt ducimus velit quod qui eum, rerum nulla earum!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni corrupti velit dolore, optio voluptates quas ratione architecto ut quidem fugit atque asperiores amet. Mollitia quas, alias rerum officia iusto porro.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
