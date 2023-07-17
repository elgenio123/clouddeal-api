<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create([
            'name' => "Nord",
        ]);
        Region::create([
            'name' => "Extreme Nord",
        ]);
        Region::create([
            'name' => "Sud",
        ]);
        Region::create([
            'name' => "Sud Ouest",
        ]);
        Region::create([
            'name' => "Adamaoua",
        ]);
        Region::create([
            'name' => "littoral",
        ]);
        Region::create([
            'name' => "Centre",
        ]);
        Region::create([
            'name' => "Est",
        ]);
        Region::create([
            'name' => "Ouest",
        ]);
        Region::create([
            'name' => "Nord Ouest",
        ]);
    }
}
