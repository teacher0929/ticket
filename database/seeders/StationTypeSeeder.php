<?php

namespace Database\Seeders;

use App\Models\StationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['code' => 'AIR', 'name' => 'Airport', 'name_ru' => 'Аэропорт'],
            ['code' => 'TRN', 'name' => 'Train Station', 'name_ru' => 'Железнодорожный вокзал'],
            ['code' => 'BUS', 'name' => 'Bus Station', 'name_ru' => 'Автовокзал'],
        ];

        foreach ($types as $type) {
            StationType::create($type);
        }
    }
}
