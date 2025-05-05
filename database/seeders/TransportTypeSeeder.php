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
        $types = ['Airline', 'Train', 'Bus'];

        foreach ($types as $type) {
            TransportType::create(['name' => $type]);
        }
    }
}
