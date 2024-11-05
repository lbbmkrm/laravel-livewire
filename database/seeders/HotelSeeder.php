<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            'name' => 'RedDoorz',
            'email' => 'red@doorz.com',
            'address' => 'Medan',
            'phone' => fake()->phoneNumber(),
            'star' => 4
        ]);

        Hotel::factory(20)->create();
    }
}
