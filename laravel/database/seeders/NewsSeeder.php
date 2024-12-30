<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => 'Kelas Advokasi HMJ TI, Harapkan Mahasiswa Peka Terhadap Polemik Kampus',
            'slug' => Str::slug('Kelas Advokasi HMJ TI, Harapkan Mahasiswa Peka Terhadap Polemik Kampus'),
            'content' => 'Himpunan Mahasiswa Jurusan (HMJ) Teknik Informatika (TI) Fakultas Sains dan Teknologi (FST) UIN Alauddin Makassar selenggarakan Kelas Advokasi Vol 4 dengan tema “Menyapa Lingkar Ormawa, sebagai Upaya untuk Menapaki Jalan Setapak Fungsionaris Meng-Internal-lisasi Kelembagaan” di pelataran Gedung D FST, Sabtu (23/11/2024)

Kegiatan ini bertujuan untuk meningkatkan kesadaran mahasiswa terhadap polemik kampus, literasi, dan tanggung jawab mereka dalam menghadapi permasalahan di lingkungan akademik. Dan mengundang berbagai pembicara dari luar kampus untuk memberikan perspektif yang lebih luas.

Panitia Kelas Advokasi, Fadel mengungkapkan pentingnya membangun kepekaan terhadap polemik kampus yang tengah terjadi.

“Seharusnya kita tidak hanya mempelajari hal-hal teknis, tapi juga harus memahami ilmu di luar bidang kami, termasuk membangun literasi dan kepekaan terhadap polemik di kampus,” tuturnya.

Menurutnya, kelas advokasi ini memberikan kesempatan untuk memahami isu-isu seperti sistem birokrasi kampus, kurikulum merdeka, dan bagaimana mahasiswa sering menjadi korban dari sistem tersebut.

“Materi yang dibahas sangat relevan. Mahasiswa harus sadar akan posisinya sebagai korban sistem, sehingga mampu bergerak meskipun dalam skala kecil,” tambahnya.

Sementara itu, salah satu peserta, Astrid mengungkapkan ketertarikannya terhadap kelas advokasi tersebut.

“Saya pertama kali bergabung karena tertarik dengan tema pentingnya literasi. Sejak saat itu, saya terus mengikuti hingga kelas keempat ini,” ungkapnya.

Astrid mengungkapkan kegiatan ini penting untuk membahas isu sosial dan kampus.',
            'image' => 'kelas-advokasi.jpeg',
        ]);

        News::create([
            'title' => 'Perayaan 2 Dekade Prodi Teknik Informatika, Meniti Transformasi Melalui Inovasi',
            'slug' => Str::slug('Perayaan 2 Dekade Prodi Teknik Informatika, Meniti Transformasi Melalui Inovasi'),
            'content' => 'Program Studi (Prodi) Teknik Informatika (TI) Fakultas Sains dan Teknologi (FST) UIN Alauddin Makassar menyelenggarakan perayaan 2 dekade Teknik Informatika di Pantai Akkarena, Kota Makassar, Senin (4/11/2024)

Perayaan 2 dekade ini mengusung tema “Transformasi Teknologi: Dua Puluh Tahun Jejak Peradaban Cerdas Melalui Inovasi,” yang berlangsung sejak 31 Oktober hingga 4 November 2024.

Adapun agenda kegiatan yang dimulai sejak 31 Oktober diawali dengan workshop dan dilanjutkan dengan informatic futsal cup yang berlangsung selama dua hari hingga malam puncak di tanggal 4 November dengan beberapa pementasan seperti Tari Paduppa, Tari Wonderland dan spesial performance dari Ismy Amaliah.

Kegiatan ini dibuka oleh Ketua Jurusan Teknik Informatika, Mustika Sari, yang dalam sambutannya mengungkapkan banyaknya perubahan dalam dunia TI disamping kemajuan teknologi saat ini.

“Perjalanan teknik Informatika selama 20 tahun ini mengalami jejak bagaimana peradaban cerdas ini bersentukan langsung dengan teknologi dan membawa TI ke arah kemajuan,” ungkapnya.

Lebih lanjut ia juga menyampaikan harapan mahasiswa alumni tetap menjadi bagian insan TI ditengah perannya sebagai tokoh masyarakat

“sejauh ini saya telah banyak menyaksikan perubahan hadir silih berganti mahasiswa yang masuk dan keluar sebagai alumni dan menjadi tokoh masyarakat, semoga gaung semangat tetap selalu ada di hati kita sebagai insan TI,” lanjutnya.

Ketua Panitia, Andi Nugraha Hasmi, menuturkan banyaknya inovasi dan prestasi oleh mahasiswa TI menjadi alasan pengangkatan tema tersebut.

“Tema kali ini diambil karena kita melirik kembali perjalan 20 tahun TI yang telah mengalami berbagai inovasi diantaranya berbagai prestasi yang diraih oleh sejumlah mahasiswa di tingkat nasional,” tuturnya.',
            'image' => 'dua-dekade.jpeg',
        ]);
    }
}
