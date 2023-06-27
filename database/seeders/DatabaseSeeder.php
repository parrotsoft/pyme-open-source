<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(OperativeSystemSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ApplicationsSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
