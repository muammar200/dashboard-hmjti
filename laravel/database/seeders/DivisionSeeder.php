<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            'Organisasi & Kaderisasi',
            'Keilmuan',
            'Minat & Bakat',
            'Ekonomi Kreatif',
            'Humas & Advokasi',
            'Komunikasi & Informasi',
            'Non Divisi',
        ];

        foreach ($divisions as $division) {
            DB::table('divisions')->insert([
                'name' => $division,
            ]);
        }
    }
}
