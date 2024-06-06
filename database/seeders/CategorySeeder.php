<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'category' => 'beverages',
                'description' => 'All drinkable items'
            ],

            [
                'category' => 'food',
                'description' => 'All food item'
            ],

            [
                'category' => 'Medicinces',
                'description' => 'All medical drugs items'
            ],

            [
                'category' => 'Accessories',
                'description' => 'All personal accessories items'
            ],

            [
                'category' => 'Condiments',
                'description' => 'All condiments items'
            ]            
               
        ];  
        foreach($data as $d) {
            Category::create($d);
        }
    }
}
