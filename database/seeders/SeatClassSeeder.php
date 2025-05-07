<?php

namespace Database\Seeders;

use App\Models\SeatClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            ['code' => 'ECO', 'name' => 'Economy', 'name_ru' => 'Эконом'],
            ['code' => 'BUS', 'name' => 'Business', 'name_ru' => 'Бизнес'],
        ];

        foreach ($classes as $class) {
            SeatClass::create($class);
        }
    }
}
