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
            ['transport_type_id' => 1, 'code' => 'TK-100', 'name' => 'Turkish Airlines'],
            ['transport_type_id' => 1, 'code' => 'SU-200', 'name' => 'Aeroflot'],
            ['transport_type_id' => 2, 'code' => 'EXP-301', 'name' => 'Express Train'],
            ['transport_type_id' => 2, 'code' => 'SIB-402', 'name' => 'Siberian Rail'],
            ['transport_type_id' => 3, 'code' => 'BUS-101', 'name' => 'City Bus'],
            ['transport_type_id' => 3, 'code' => 'INTER-202', 'name' => 'Intercity Bus'],
        ];

        foreach ($transports as $transport) {
            Transport::create($transport);
        }
    }
}
