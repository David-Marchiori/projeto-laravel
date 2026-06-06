<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $regions = [
            [
                'name'         => 'Sul',
                'zipcode_start' => '80000000',
                'zipcode_end'   => '99999999',
                'delivery_days' => 3,
            ],
            [
                'name'         => 'Sudeste',
                'zipcode_start' => '01000000',
                'zipcode_end'   => '39999999',
                'delivery_days' => 5,
            ],
            [
                'name'         => 'Centro-Oeste',
                'zipcode_start' => '70000000',
                'zipcode_end'   => '79999999',
                'delivery_days' => 7,
            ],
            [
                'name'         => 'Nordeste',
                'zipcode_start' => '40000000',
                'zipcode_end'   => '65999999',
                'delivery_days' => 10,
            ],
            [
                'name'         => 'Norte',
                'zipcode_start' => '66000000',
                'zipcode_end'   => '69999999',
                'delivery_days' => 12,
            ],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
