<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Кровати',
            'slug' => 'Кровати',
            'status' => (0),
            'popular' => (1),
            'image' => '1660052232.jpg',
            'meta_title' => 'Кровати',
            'meta_description' => 'Все виды кроватей',
            'meta_keywords' => 'Кровати'
        ]);
        DB::table('categories')->insert([
            'name' => 'Стулья',
            'slug' => 'Стулья',
            'status' => (1),
            'popular' => (0),
            'image' => '1662635896.jpg',
            'meta_title' => 'Стулья',
            'meta_description' => 'Все виды стульев',
            'meta_keywords' => 'Стулья'
        ]);
        DB::table('categories')->insert([
            'name' => 'Диваны',
            'slug' => 'Диваны',
            'status' => (1),
            'popular' => (0),
            'image' => 'paul-weaver.jpg',
            'meta_title' => 'Диваны',
            'meta_description' => 'Все виды диванов',
            'meta_keywords' => 'Диваны'
        ]);
        DB::table('categories')->insert([
            'name' => 'Детская мебель',
            'slug' => 'Детская мебель',
            'status' => (1),
            'popular' => (0),
            'image' => 'laurence-katz.jpg',
            'meta_title' => 'Детская мебель',
            'meta_description' => 'Все виды детской мебели',
            'meta_keywords' => 'Детская мебель'
        ]);
        DB::table('categories')->insert([
            'name' => 'Мебель для гостиной',
            'slug' => 'Мебель для гостиной',
            'status' => (1),
            'popular' => (0),
            'image' => 'dan-gold.jpg',
            'meta_title' => 'Мебель для гостиной',
            'meta_description' => 'Все виды мебели для гостиной',
            'meta_keywords' => 'Мебель для гостиной'
        ]);
        DB::table('categories')->insert([
            'name' => 'Мебель для кухни',
            'slug' => 'Мебель для кухни',
            'status' => (1),
            'popular' => (0),
            'image' => 'sidekix-media.jpg',
            'meta_title' => 'Мебель для кухни',
            'meta_description' => 'Все виды мебели для кухни',
            'meta_keywords' => 'Мебель для кухни'
        ]);
    }
}
