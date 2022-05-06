<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
      User::factory()->create([
        'name' => 'Italo Morales F',
        'email' => 'i@admin.com',
        'password' => bcrypt('123566')
      ]);

      \App\Models\Post::factory()->count(24)->create();

    }
}
