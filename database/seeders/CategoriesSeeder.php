<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Categories::create([
            'name' => 'Scissors',
        ]);
        

        Categories::create([
        "name" => "Clippers",
        ]);

        Categories::create([
        "name" => "Trimmers",
        ]);

        Categories::create([
        "name" => "Razors",
        ]);

        Categories::create([
        "name" => "Shears",
        ]);
    }
}
