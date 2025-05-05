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
            ['transport_type_id' => 1, 'code' => 'TK-101', 'name' => 'Turkish Airlines'],
            ['transport_type_id' => 1, 'code' => 'AF-202', 'name' => 'Aeroflot'],
            ['transport_type_id' => 1, 'code' => 'TM-303', 'name' => 'Turkmenistan Airlines'],
            ['transport_type_id' => 1, 'code' => 'SU-404', 'name' => 'S7 Airlines'],

            // Trains
            ['transport_type_id' => 2, 'code' => 'TR-001', 'name' => 'Ashgabat Express'],
            ['transport_type_id' => 2, 'code' => 'TR-002', 'name' => 'Caspian Rail'],
            ['transport_type_id' => 2, 'code' => 'TR-003', 'name' => 'Siberian Line'],
            ['transport_type_id' => 2, 'code' => 'TR-004', 'name' => 'Moscow Railway'],

            // Buses
            ['transport_type_id' => 3, 'code' => 'BS-11', 'name' => 'Ashgabat City Bus'],
            ['transport_type_id' => 3, 'code' => 'BS-12', 'name' => 'Turkmen Intercity'],
            ['transport_type_id' => 3, 'code' => 'BS-13', 'name' => 'Mary Express'],
            ['transport_type_id' => 3, 'code' => 'BS-14', 'name' => 'Volga Route'],
        ];

        foreach ($transports as $transport) {
            Transport::create($transport);
        }
    }
}
