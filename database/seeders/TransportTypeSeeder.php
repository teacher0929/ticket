<?php

namespace Database\Seeders;

use App\Models\TransportType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['station_type_id' => 1, 'name' => 'Airplane', 'name_ru' => 'Самолет'],
            ['station_type_id' => 2, 'name' => 'Train', 'name_ru' => 'Поезд'],
            ['station_type_id' => 3, 'name' => 'Bus', 'name_ru' => 'Автобус'],
        ];

        foreach ($types as $type) {
            TransportType::create($type);
        }
    }
}
