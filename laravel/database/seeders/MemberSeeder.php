<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'name' => 'Aqilah Zahra',
            'image' => 'aca.webp',
            'period_id' => 1,
            'position_id' => 1,
            'division_id' => 7,
        ]);
        Member::create([
            'name' => 'Nur Ramadani',
            'image' => 'dani.webp',
            'period_id' => 1,
            'position_id' => 2,
            'division_id' => 7,
        ]);
        Member::create([
            'name' => 'Shafwan Zuhdy',
            'image' => 'narkos.webp',
            'period_id' => 1,
            'position_id' => 3,
            'division_id' => 7,
        ]);
        Member::create([
            'name' => 'Nurdiah Anggraini Putri',
            'image' => 'pute.webp',
            'period_id' => 1,
            'position_id' => 4,
            'division_id' => 7,
        ]);
        Member::create([
            'name' => 'Radhiah Mardhiah',
            'image' => 'rere.webp',
            'period_id' => 1,
            'position_id' => 5,
            'division_id' => 7,
        ]);
        Member::create([
            'name' => 'Muh. Rezaldy',
            'image' => 'aldy.webp',
            'period_id' => 1,
            'position_id' => 6,
            'division_id' => 7,
        ]);
        
        Member::create([
            'name' => 'A. Nuhang Nugraha Hasbih',
            'image' => 'nuhang.webp',
            'period_id' => 1,
            'position_id' => 7,
            'division_id' => 7,
        ]);
        Member::create([
            'name' => 'A. Nuhang Nugraha Hasbih',
            'image' => 'nuhang.webp',
            'period_id' => 1,
            'position_id' => 7,
            'division_id' => 7,
        ]);

        Member::create([
            'name' => 'Nurhidayat',
            'image' => 'dali.webp',
            'period_id' => 1,
            'position_id' => 8,
            'division_id' => 1,
        ]);
        Member::create([
            'name' => 'Muh. Akramul Khair',
            'image' => 'akram.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 1,
        ]);
        Member::create([
            'name' => 'Nur Fausi',
            'image' => 'gerhana.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 1,
        ]);

        Member::create([
            'name' => 'Muh. Musyary',
            'image' => 'ary.webp',
            'period_id' => 1,
            'position_id' => 8,
            'division_id' => 2,
        ]);
        Member::create([
            'name' => 'Muammar',
            'image' => 'ammar.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 2,
        ]);
        Member::create([
            'name' => 'Aisyah Nurrahmah',
            'image' => 'cea.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 2,
        ]);
        Member::create([
            'name' => 'Muh. Anwar Syafriawan',
            'image' => 'obi.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 2,
        ]);

        Member::create([
            'name' => 'Irfan Bagdad',
            'image' => 'ippang.webp',
            'period_id' => 1,
            'position_id' => 8,
            'division_id' => 3,
        ]);
        Member::create([
            'name' => 'Muh. Shamil Izzah',
            'image' => 'shamil.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 3,
        ]);
        Member::create([
            'name' => 'Muhajir',
            'image' => 'muhajir.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 3,
        ]);

        Member::create([
            'name' => 'Ariska Yolanda',
            'image' => 'ica.webp',
            'period_id' => 1,
            'position_id' => 8,
            'division_id' => 4,
        ]);
        Member::create([
            'name' => 'Annisa Aulia Putri',
            'image' => 'puput.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 4,
        ]);

        Member::create([
            'name' => 'Muh. Ichsan Pratama Putra',
            'image' => 'ichsan.webp',
            'period_id' => 1,
            'position_id' => 8,
            'division_id' => 5,
        ]);
        Member::create([
            'name' => 'A. Muh Alfaridzi Akbar',
            'image' => 'alpa.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 5,
        ]);
        Member::create([
            'name' => 'Muh. Fadel Baharuddin',
            'image' => 'enjot.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 5,
        ]);

        Member::create([
            'name' => 'Fadhil Akhyar Muhammad',
            'image' => 'fadhil.webp',
            'period_id' => 1,
            'position_id' => 8,
            'division_id' => 6,
        ]);
        Member::create([
            'name' => 'Rizka Safira Amalyah',
            'image' => 'dinda.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 6,
        ]);
        Member::create([
            'name' => 'M. Qoyyum Al - Sahhaf',
            'image' => 'sony.webp',
            'period_id' => 1,
            'position_id' => 10,
            'division_id' => 6,
        ]);
    }
}
