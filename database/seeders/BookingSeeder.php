<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Route;
use App\Models\TransportSeat;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $routes = Route::all();

        foreach ($routes as $route) {
            $seats = TransportSeat::where('transport_id', $route->transport_id)
                ->inRandomOrder()
                ->take(rand(3, 7))
                ->get();

            foreach ($seats as $i => $seat) {
                $user = $users->random();

                Booking::create([
                    'route_id' => $route->id,
                    'transport_seat_id' => $seat->id,
                    'user_id' => $user->id,
                    'code' => 'BK-' . $route->id . '-' . str_pad($i + 1, 2, '0', STR_PAD_LEFT),
                    'price' => $seat->price,
                    'status' => 1,
                ]);
            }
        }
    }
}
