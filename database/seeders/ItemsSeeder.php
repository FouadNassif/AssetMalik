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
            'price' => '1',
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
            'price' => '11',
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
            'price' => '25435',
            'quantity' => '343',
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
            'price' => '9349',
            'quantity' => '12',
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
            'price' => '23',
            'quantity' => '4325',
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
            'price' => '34',
            'quantity' => '234',
            'raiting' => 5,
            'category_id' => 4
        ]);

        Items::create([
            'name' => 'Hyper X Cut 1.8L v8 2013 Hello World calories 4%',
            'description' => 'Découvrez la nouvelle tondeuse de finition STYLECRAFT SABER TRIMMER

            Sa conception de style “SQUELLETE MINCE”  expose parfaitement la lame qui offre une visibilité optimale pour une précision de coupe améliorée.
            
            Equipée de lames à dents profondes “THE ONE” réglable à O pour une coupe plus nette et plus lisse sans tirer ni accrocher.
            
            Le moteur numérique à couple élevé et à faibles vibrations tourne à 7 500 tr/min, offrant plus de puissance avec une coupe de cheveux efficace et silencieuse.
            
            Sa technologie innovante offre un transfert de puissance qui se traduit par un fonctionnement plus fluide et une chaleur réduite.
            
            Contrairement à d’autres tondeuses à cheveux, la tondeuse Sabre a un design effilé mince et moderne avec un corps entièrement en métal super durable, qui ne pèse incroyablement que 213g. offrant le summum du confort et de l’agilité.
            
            Caractéristiques techniques:
            <ul>
            <li>Moteur numérique sans balais longue durée fonctionnant à 7 500 tr/min.</li>
            <li>Corps entièrement en métal GOLD à haute résistance.</li>
            <li>Large lame fixe en titane doré X-PRO et lame mobile DLC en carbone BLACK DIAMOND. </li>
            <li>Batterie lithium-ion offrant offrant 3 heures d’autonomie sans fil avec un temps recharge de 90 minutes </li>
            <li>Rechargeable par câble d’alimentation électrique, câble micro-USB et socle.</li>
            <li>Design fin et moderne avec un corps entièrement métallique.</li>
            <li>Vendu avec: 1 câble d’alimentation, 1 burette d’huile, 1 brosse, 1 socle chargeur et 1 mini-tournevis.</li>
            </ul>
            ',
            'price' => '21',
            'quantity' => '99',
            'raiting' => 5,
            'category_id' => 4
        ]);
    }
}
