<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        User::truncate();
        Category::truncate();
        Post::truncate();

        Post::factory()->create();
        /*
          $user = User::factory()->create();
          $personal = Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
          ]);

          $work = Category::create([
          'name' => 'Work',
          'slug' => 'work'
          ]);

          $hobbies = Category::create([
          'name' => 'Hobbies',
          'slug' => 'hobbies'
          ]);

          Post::create([
          'user_id' => $user->id,
          'category_id' => $personal->id,
          'title' => 'My first post',
          'excerpt' => 'Excerpt for my first post',
          'slug' => 'my-personal-post',
          'body' => '<p>Something interessting for my first post</p>'
          ]);

          Post::create([
          'user_id' => $user->id,
          'category_id' => $work->id,
          'title' => 'My second post',
          'excerpt' => 'Excerpt for my second post',
          'slug' => 'my-work-post',
          'body' => '<p>Super interessting for my work post<p>'
          ]);

          Post::create([
          'user_id' => $user->id,
          'category_id' => $hobbies->id,
          'title' => 'My third post',
          'excerpt' => 'Excerpt for my third post',
          'slug' => 'my-hobbies-post',
          'body' => '<p>Amazing interessting for my hobby post</p>'
          ]);
         * 
         */
    }

}
