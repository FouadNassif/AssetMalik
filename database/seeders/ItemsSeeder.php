<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public function run(): void
    {
        Items::create([
            'name' => 'Gell Douche HairStyle 300ml',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vero asperiores commodi porro nostrum doloribus, pariatur odio modi perferendis 
                            facere exercitationem inventore dolor architecto? Enim ullam officia laudantium 
                            quia, modi, laboriosam voluptate iure explicabo saepe vel illum aut, voluptatem 
                            necessitatibus similique?',
            'price' => '99',
            'quantity' => '99',
            'raiting' => 5,
            'category_id' => 4
        ]);

        Items::create([
            'name' => 'Razor CUt MAchine 4500watt 6000rpm',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vero asperiores commodi porro nostrum doloribus, pariatur odio modi perferendis 
                            facere exercitationem inventore dolor architecto? Enim ullam officia laudantium 
                            quia, modi, laboriosam voluptate iure explicabo saepe vel illum aut, voluptatem 
                            necessitatibus similique?',
            'price' => '99',
            'quantity' => '99',
            'raiting' => 5,
            'category_id' => 4
        ]);

        Items::create([
            'name' => 'Towel for men blue ',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vero asperiores commodi porro nostrum doloribus, pariatur odio modi perferendis 
                            facere exercitationem inventore dolor architecto? Enim ullam officia laudantium 
                            quia, modi, laboriosam voluptate iure explicabo saepe vel illum aut, voluptatem 
                            necessitatibus similique?',
            'price' => '99',
            'quantity' => '99',
            'raiting' => 5,
            'category_id' => 4
        ]);

        Items::create([
            'name' => 'Razor Cutt MSI 203 Watt 35444RPM 20volt ',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vero asperiores commodi porro nostrum doloribus, pariatur odio modi perferendis 
                            facere exercitationem inventore dolor architecto? Enim ullam officia laudantium 
                            quia, modi, laboriosam voluptate iure explicabo saepe vel illum aut, voluptatem 
                            necessitatibus similique?',
            'price' => '99',
            'quantity' => '99',
            'raiting' => 5,
            'category_id' => 4
        ]);

        Items::create([
            'name' => 'Razor Cut 33485Watt 40Volt 320504RPM ',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vero asperiores commodi porro nostrum doloribus, pariatur odio modi perferendis 
                            facere exercitationem inventore dolor architecto? Enim ullam officia laudantium 
                            quia, modi, laboriosam voluptate iure explicabo saepe vel illum aut, voluptatem 
                            necessitatibus similique?',
            'price' => '99',
            'quantity' => '99',
            'raiting' => 5,
            'category_id' => 4
        ]);

        Items::create([
            'name' => 'Hyper X Cut 1.8L v8 2013 Hello World calories 4%',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vero asperiores commodi porro nostrum doloribus, pariatur odio modi perferendis 
                            facere exercitationem inventore dolor architecto? Enim ullam officia laudantium 
                            quia, modi, laboriosam voluptate iure explicabo saepe vel illum aut, voluptatem 
                            necessitatibus similique?',
            'price' => '99',
            'quantity' => '99',
            'raiting' => 5,
            'category_id' => 4
        ]);
    }
}

