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
            ['code' => 'ECO', 'name' => 'Economy'],
            ['code' => 'BUS', 'name' => 'Business'],
        ];

        foreach ($classes as $class) {
            SeatClass::create($class);
        }
    }
}
