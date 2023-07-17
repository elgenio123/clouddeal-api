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
            'name' => "ouest",

        ]);
        Region::create([
            'name' => " nord ouest",

        ]);
        Region::create([
            'name' => "sud ouest",

        ]);
        Region::create([
            'name' => "est",

        ]);
        Region::create([
            'name' => "sud",

        ]);
        Region::create([
            'name' => "centre",

        ]);
        Region::create([
            'name' => "littoral",

        ]);
        Region::create([
            'name' => "adamaoua",

        ]);
        Region::create([
            'name' => "extreme nord",

        ]);
        Region::create([
            'name' => "nord",

        ]);

    }
}
