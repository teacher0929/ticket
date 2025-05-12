<?php

namespace Database\Seeders;

use App\Models\Transport;
use App\Models\TransportType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transports = [
            // Airlines
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'TK-101', 'name' => 'Qatar Airways'],
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'AF-202', 'name' => 'Singapore Airlines'],
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'TM-303', 'name' => 'Emirates'],
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'SU-404', 'name' => 'Turkish Airlines'],

            // Trains
            ['station_type_id' => 2, 'transport_type_id' => 2, 'code' => 'TR-001', 'name' => 'Europa Express'],
            ['station_type_id' => 2, 'transport_type_id' => 2, 'code' => 'TR-002', 'name' => 'Caspian Express'],
            ['station_type_id' => 2, 'transport_type_id' => 2, 'code' => 'TR-003', 'name' => 'Moscow Express'],

            // Buses
            ['station_type_id' => 3, 'transport_type_id' => 3, 'code' => 'BS-11', 'name' => 'Amazon Bus'],
            ['station_type_id' => 3, 'transport_type_id' => 3, 'code' => 'BS-12', 'name' => 'Volga Bus'],
        ];

        foreach ($transports as $transport) {
            Transport::create($transport);
        }
    }
}
