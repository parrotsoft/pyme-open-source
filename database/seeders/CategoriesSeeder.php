<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Ofimática',
            'Negocios',
            'Educacación',
            'Multimedia',
        ];

        foreach ($data as $row) {
            Category::query()->create([
                'user_id' =>  1,
                'description' => $row,
            ]);
        }
    }
}
