<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'Ketua Umum',
            'Sekretaris Umum',
            'Wakil Sekretaris Umum',
            'Bendahara Umum',
            'Wakil Bendahara Umum',
            'Wakil Ketua 1',
            'Wakil Ketua 2',
            'Ketua Bidang',
            'Wakil Ketua Bidang',
            'Anggota Bidang'
        ];

        foreach ($positions as $position) {
            DB::table('positions')->insert([
                'name' => $position,
            ]);
        }
    }
}
