<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\Category::factory(6)->create();
        \App\Models\Product::factory(22)->create();
        \App\Models\HomeCategory::factory(1)->create();
        \App\Models\Sale::factory(1)->create();

    }
}
