<?php

namespace Database\Seeders;

use App\Models\Route;
use App\Models\Station;
use App\Models\Transport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transports = Transport::inRandomOrder()->get();
        $stations = Station::get();

        foreach ($transports as $index => $transport) {
            $from = $stations->where('station_type_id', $transport->station_type_id)->random();
            do {
                $to = $stations->where('station_type_id', $from->station_type_id)->random();
            } while ($to->id === $from->id);

            $addDays = rand(1, 10);

            Route::create([
                'transport_id' => $transport->id,
                'from_station_id' => $from->id,
                'to_station_id' => $to->id,
                'code' => 'RT-' . str_pad($index + 1, 3, '0', STR_PAD_LEFT),
                'departure_time' => now()->addDays($addDays)->setTime(rand(5, 15), 0),
                'arrival_time' => now()->addDays($addDays)->setTime(rand(16, 22), 0),
                'status' => rand(0, 2),
            ]);
        }
    }
}
