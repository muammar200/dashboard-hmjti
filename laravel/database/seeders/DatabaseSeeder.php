<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Fadhil Akhyar',
            'username' => 'fadhil',
            'password' => 'hmjti'
        ]);

        // $this->call([PeriodSeeder::class, DivisionSeeder::class, PositionSeeder::class, NewsSeeder::class, ProductSeeder::class, MemberSeeder::class]);
    }
}
