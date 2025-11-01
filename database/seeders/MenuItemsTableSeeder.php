<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('menu_items')->truncate();

        MenuItem::create([
            'name' => 'Kitchen Set Cukimai',
            'description' => 'lorem ipsum',
            'photo' => 'bg4.jpeg',
            'menu_number' => '1',
            'type' => 'Kitchen',
            'stock' => 5,
            'slug' => Str::slug('Paket Ayam Bakar'),
        ]);

        MenuItem::create([
            'name' => 'Kitchen Set Elegan',
            'description' => 'Lorem Ipsum',
            'photo' => 'bg3.jpg',
            'menu_number' => '2',
            'type' => 'Kitchen',
            'stock' => 10,
            'slug' => Str::slug('Kitchen Set Elegan'),
        ]);

        MenuItem::create([
            'name' => 'Kitchen Set Unyu',
            'description' => 'Lorem Ipsum',
            'photo' => 'bg2.jpg',
            'menu_number' => '3',
            'type' => 'Kitchen',
            'stock' => 12,
            'slug' => Str::slug('Kitchen Set Unyu'),
        ]);
    }
}
