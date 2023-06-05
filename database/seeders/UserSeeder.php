<?php

namespace Database\Seeders;

use App\Models\Enums\SexeEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Gabriel",
            'email' => "gabrielwilfried0808@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'sex' => SexeEnum::Male->value,
            'is_admin' => true,
            'location' => null
        ]);
    }
}