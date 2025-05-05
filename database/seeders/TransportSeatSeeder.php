<?php

namespace Database\Seeders;

use App\Models\SeatClass;
use App\Models\Transport;
use App\Models\TransportSeat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transports = Transport::inRandomOrder()->get();
        $economy = SeatClass::where('code', 'ECO')->first();
        $business = SeatClass::where('code', 'BUS')->first();

        foreach ($transports as $transport) {
            for ($i = 1; $i <= 5; $i++) {
                TransportSeat::create([
                    'transport_id' => $transport->id,
                    'seat_class_id' => $economy->id,
                    'seat_number' => strtoupper(substr($economy->code, 0, 1)) . $i,
                    'price' => 50 + ($economy->id * 25),
                ]);
            }

            for ($i = 1; $i <= 5; $i++) {
                TransportSeat::create([
                    'transport_id' => $transport->id,
                    'seat_class_id' => $business->id,
                    'seat_number' => strtoupper(substr($business->code, 0, 1)) . $i,
                    'price' => 50 + ($business->id * 25),
                ]);
            }
        }
    }
}
