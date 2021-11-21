<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        /* Can be deleted if the creation is done after refresh migration
          User::truncate();
          Category::truncate();
          Post::truncate();
         */
        //Post::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Smith'
        ]);

        Post::factory([
            'user_id' => $user->id
        ]);
    }

}
