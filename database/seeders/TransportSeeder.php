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
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'TK-101', 'name' => 'Turkish Airlines'],
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'AF-202', 'name' => 'Aeroflot'],
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'TM-303', 'name' => 'Turkmenistan Airlines'],
            ['station_type_id' => 1, 'transport_type_id' => 1, 'code' => 'SU-404', 'name' => 'S7 Airlines'],

            // Trains
            ['station_type_id' => 2, 'transport_type_id' => 2, 'code' => 'TR-001', 'name' => 'Ashgabat Railway'],
            ['station_type_id' => 2, 'transport_type_id' => 2, 'code' => 'TR-002', 'name' => 'Caspian Rail'],
            ['station_type_id' => 2, 'transport_type_id' => 2, 'code' => 'TR-003', 'name' => 'Moscow Railway'],

            // Buses
            ['station_type_id' => 3, 'transport_type_id' => 3, 'code' => 'BS-11', 'name' => 'Garagum Bus'],
            ['station_type_id' => 3, 'transport_type_id' => 3, 'code' => 'BS-12', 'name' => 'Volga Bus'],
        ];

        foreach ($transports as $transport) {
            Transport::create($transport);
        }
    }
}
