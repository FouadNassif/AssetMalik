<?php

namespace Database\Seeders;

use App\Models\Workers;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workers::create([
            'name' => "Fouad Nassif",
            'bio' => 'Lorem ipsum dolor sit amet.',
            'experience' => "6+ years",
            
        ]);

        Workers::create([
            'name' => "Joseph Nassif",
            'bio' => 'Lorem ipsum dolor sit amet.',
            'experience' => "6+ years",
            
        ]);

        Workers::create([
            'name' => "Fouad Nassif",
            'bio' => 'Lorem ipsum dolor sit amet.',
            'experience' => "6+ years",
            
        ]);

        Workers::create([
            'name' => "Hannah Saker",
            'bio' => 'Lorem ipsum dolor sit amet.',
            'experience' => "6+ years",
            
        ]);

        Workers::create([
            'name' => "Hammid Tahech",
            'bio' => 'Lorem ipsum dolor sit amet.',
            'experience' => "6+ years",
            
        ]);

        Workers::create([
            'name' => "Adolph Mourani",
            'bio' => 'Lorem ipsum dolor sit amet.',
            'experience' => "6+ years",
            
        ]);
    }
}
