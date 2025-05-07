<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Station;
use App\Models\StationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = Location::inRandomOrder()->whereNotNull('parent_id')->get();
        $stationTypes = StationType::inRandomOrder()->get();

        foreach ($locations as $location) {
            foreach ($stationTypes as $type) {
                Station::create([
                    'location_id' => $location->id,
                    'station_type_id' => $type->id,
                    'code' => $location->code . '-' . $type->code,
                    'name' => $location->name . ' ' . $type->name,
                    'name_ru' => $location->name_ru . ' ' . $type->name_ru,
                ]);
            }
        }
    }
}
