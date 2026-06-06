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
            ['weight_start' => 0,    'weight_end' => 1000,  'delivery_price' => 15.00, 'region_id' => 1],
            ['weight_start' => 1001, 'weight_end' => 5000,  'delivery_price' => 25.00, 'region_id' => 1],
            ['weight_start' => 5001, 'weight_end' => 10000, 'delivery_price' => 40.00, 'region_id' => 1],

            // Sudeste (region_id: 2)
            ['weight_start' => 0,    'weight_end' => 1000,  'delivery_price' => 20.00, 'region_id' => 2],
            ['weight_start' => 1001, 'weight_end' => 5000,  'delivery_price' => 30.00, 'region_id' => 2],
            ['weight_start' => 5001, 'weight_end' => 10000, 'delivery_price' => 50.00, 'region_id' => 2],

            // Centro-Oeste (region_id: 3)
            ['weight_start' => 0,    'weight_end' => 1000,  'delivery_price' => 25.00, 'region_id' => 3],
            ['weight_start' => 1001, 'weight_end' => 5000,  'delivery_price' => 35.00, 'region_id' => 3],
            ['weight_start' => 5001, 'weight_end' => 10000, 'delivery_price' => 60.00, 'region_id' => 3],

            // Nordeste (region_id: 4)
            ['weight_start' => 0,    'weight_end' => 1000,  'delivery_price' => 30.00, 'region_id' => 4],
            ['weight_start' => 1001, 'weight_end' => 5000,  'delivery_price' => 45.00, 'region_id' => 4],
            ['weight_start' => 5001, 'weight_end' => 10000, 'delivery_price' => 75.00, 'region_id' => 4],

            // Norte (region_id: 5)
            ['weight_start' => 0,    'weight_end' => 1000,  'delivery_price' => 35.00, 'region_id' => 5],
            ['weight_start' => 1001, 'weight_end' => 5000,  'delivery_price' => 55.00, 'region_id' => 5],
            ['weight_start' => 5001, 'weight_end' => 10000, 'delivery_price' => 90.00, 'region_id' => 5],
        ];

        foreach ($weightRanges as $weightRange) {
            WeightRange::create($weightRange);
        }
    }
}
