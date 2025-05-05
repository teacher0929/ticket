<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['code' => 'TM', 'name' => 'Turkmenistan', 'parent_id' => null],
            ['code' => 'RU', 'name' => 'Russia', 'parent_id' => null],

            // Turkmenistan
            ['code' => 'TM-ASH', 'name' => 'Ashgabat', 'parent_id' => 1],
            ['code' => 'TM-ARK', 'name' => 'Arkadag', 'parent_id' => 1],
            ['code' => 'TM-ANE', 'name' => 'Anev', 'parent_id' => 1],
            ['code' => 'TM-BAL', 'name' => 'Balkanabat', 'parent_id' => 1],
            ['code' => 'TM-DAS', 'name' => 'Dashoguz', 'parent_id' => 1],
            ['code' => 'TM-TUR', 'name' => 'Turkmenabat', 'parent_id' => 1],
            ['code' => 'TM-MRY', 'name' => 'Mary', 'parent_id' => 1],

            // Russia
            ['code' => 'RU-MOW', 'name' => 'Moscow', 'parent_id' => 2],
            ['code' => 'RU-LED', 'name' => 'Saint Petersburg', 'parent_id' => 2],
            ['code' => 'RU-NVS', 'name' => 'Novosibirsk', 'parent_id' => 2],
            ['code' => 'RU-EKB', 'name' => 'Yekaterinburg', 'parent_id' => 2],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
