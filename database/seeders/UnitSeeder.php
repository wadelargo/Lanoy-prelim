<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'unit_type' => 'beverages',
                'description' => 'All drinkable items'
            ],

            [
                'unit_type' => 'food',
                'description' => 'All food item'
            ],

            [
                'unit_type' => 'Medicinces',
                'description' => 'All medical drugs items'
            ],

            [
                'unit_type' => 'Accessories',
                'description' => 'All personal accessories items'
            ],

            [
                'unit_type' => 'Condiments',
                'description' => 'All condiments items'
            ]            
               
        ];  
        foreach($data as $d) {
            Unit::create($d);
        }
    }
}
