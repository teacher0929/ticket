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
            ['code' => 'TM', 'name' => 'Turkmenistan', 'name_ru' => 'Туркменистан', 'parent_id' => null],
            ['code' => 'RU', 'name' => 'Russia', 'name_ru' => 'Россия', 'parent_id' => null],

            // Turkmenistan
            ['code' => 'TM-ASH', 'name' => 'Ashgabat', 'name_ru' => 'Ашхабад', 'parent_id' => 1],
            ['code' => 'TM-ARK', 'name' => 'Arkadag', 'name_ru' => 'Аркадаг', 'parent_id' => 1],
            ['code' => 'TM-ANE', 'name' => 'Anev', 'name_ru' => 'Анев', 'parent_id' => 1],
            ['code' => 'TM-BAL', 'name' => 'Balkanabat', 'name_ru' => 'Балканабад', 'parent_id' => 1],
            ['code' => 'TM-DAS', 'name' => 'Dashoguz', 'name_ru' => 'Дашогуз', 'parent_id' => 1],
            ['code' => 'TM-TUR', 'name' => 'Turkmenabat', 'name_ru' => 'Туркменабад', 'parent_id' => 1],
            ['code' => 'TM-MRY', 'name' => 'Mary', 'name_ru' => 'Мары', 'parent_id' => 1],

            // Russia
            ['code' => 'RU-MOW', 'name' => 'Moscow', 'name_ru' => 'Москва', 'parent_id' => 2],
            ['code' => 'RU-LED', 'name' => 'Saint Petersburg', 'name_ru' => 'Санкт-Петербург', 'parent_id' => 2],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
