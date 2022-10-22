<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $colors = [
            'Crimson' => '#DC143C',
            'FireBrick' => '#B22222',
            'ForestGreen' => '#228B22',
            'Coral' => '#FF7F50',
            'Khaki' => '#F0E68C',
            'SteelBlue' => '#4682B4',
            'Purple' => '#800080',
            'SaddleBrown' => '#8B4513',
            'Teal' => '#008080',
            'Black' => '#000000',
            'White' => '#ffffff'
        ];
        foreach ($colors as $key => $value) {
           DB::table('color_products')->insert([
            'name' => $key,
            'color' => $value
            ]);
        }
    }
}
