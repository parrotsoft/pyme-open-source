<?php

namespace Database\Seeders;

use App\Models\OperativeSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperativeSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Windows',
            'Linux',
            'Android',
            'IOS'
        ];

        foreach ($data as $row) {
            OperativeSystem::query()->create([
                'user_id' =>  1,
                'description' => $row,
            ]);
        }
    }
}
