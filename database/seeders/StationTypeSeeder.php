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
            ['code' => 'AIR', 'name' => 'Airport'],
            ['code' => 'TRN', 'name' => 'Train Station'],
            ['code' => 'BUS', 'name' => 'Bus Station']
        ];

        foreach ($types as $type) {
            StationType::create($type);
        }
    }
}
