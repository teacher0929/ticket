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
            ['name' => 'Airplane', 'name_ru' => 'Самолет'],
            ['name' => 'Train', 'name_ru' => 'Поезд'],
            ['name' => 'Bus', 'name_ru' => 'Автобус'],
        ];

        foreach ($types as $type) {
            TransportType::create($type);
        }
    }
}
