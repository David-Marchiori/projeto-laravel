<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WeightRange;

class WeightRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weightRanges = [
            // Sul (region_id: 1)
            ['weight_start' => 0,    'weight_end' => 1000,  'base_price' => 10.00, 'price_per_kg' => 5.00,  'region_id' => 1],
            ['weight_start' => 1001, 'weight_end' => 5000,  'base_price' => 15.00, 'price_per_kg' => 4.00,  'region_id' => 1],
            ['weight_start' => 5001, 'weight_end' => 10000, 'base_price' => 25.00, 'price_per_kg' => 3.00,  'region_id' => 1],

            // Sudeste (region_id: 2)
            ['weight_start' => 0,    'weight_end' => 1000,  'base_price' => 12.00, 'price_per_kg' => 6.00,  'region_id' => 2],
            ['weight_start' => 1001, 'weight_end' => 5000,  'base_price' => 18.00, 'price_per_kg' => 5.00,  'region_id' => 2],
            ['weight_start' => 5001, 'weight_end' => 10000, 'base_price' => 30.00, 'price_per_kg' => 4.00,  'region_id' => 2],

            // Centro-Oeste (region_id: 3)
            ['weight_start' => 0,    'weight_end' => 1000,  'base_price' => 15.00, 'price_per_kg' => 7.00,  'region_id' => 3],
            ['weight_start' => 1001, 'weight_end' => 5000,  'base_price' => 22.00, 'price_per_kg' => 6.00,  'region_id' => 3],
            ['weight_start' => 5001, 'weight_end' => 10000, 'base_price' => 35.00, 'price_per_kg' => 5.00,  'region_id' => 3],

            // Nordeste (region_id: 4)
            ['weight_start' => 0,    'weight_end' => 1000,  'base_price' => 18.00, 'price_per_kg' => 8.00,  'region_id' => 4],
            ['weight_start' => 1001, 'weight_end' => 5000,  'base_price' => 25.00, 'price_per_kg' => 7.00,  'region_id' => 4],
            ['weight_start' => 5001, 'weight_end' => 10000, 'base_price' => 40.00, 'price_per_kg' => 6.00,  'region_id' => 4],

            // Norte (region_id: 5)
            ['weight_start' => 0,    'weight_end' => 1000,  'base_price' => 20.00, 'price_per_kg' => 9.00,  'region_id' => 5],
            ['weight_start' => 1001, 'weight_end' => 5000,  'base_price' => 30.00, 'price_per_kg' => 8.00,  'region_id' => 5],
            ['weight_start' => 5001, 'weight_end' => 10000, 'base_price' => 50.00, 'price_per_kg' => 7.00,  'region_id' => 5],
        ];

        foreach ($weightRanges as $weightRange) {
            WeightRange::create($weightRange);
        }
    }
}
