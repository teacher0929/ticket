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
        $seatClasses = SeatClass::get();

        foreach ($transports as $transport) {
            foreach ($seatClasses as $class) {
                for ($i = 1; $i <= 5; $i++) {
                    TransportSeat::create([
                        'transport_id' => $transport->id,
                        'seat_class_id' => $class->id,
                        'seat_number' => strtoupper(substr($class->code, 0, 1)) . $i,
                        'price' => 50 + ($class->id * 25),
                    ]);
                }
            }
        }
    }
}
