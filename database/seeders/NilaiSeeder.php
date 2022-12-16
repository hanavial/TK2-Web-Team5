<?php

namespace Database\Seeders;

use App\Models\Nilai;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nilai::create([
            'nim'     => '2440012345',
            'nama'    => 'Andika Pramono',
            'quiz'    => 97,
            'tugas'   => 95,
            'absensi' => 90,
            'praktek' => 94,
            'uas'     => 88,
            'total'   => 93,
            'grade'   => 'A'
        ]);

        Nilai::create([
            'nim'     => '2440012346',
            'nama'    => 'Beni Atmojo',
            'quiz'    => 78,
            'tugas'   => 83,
            'absensi' => 85,
            'praktek' => 81,
            'uas'     => 80,
            'total'   => 81,
            'grade'   => 'B'
        ]);

        Nilai::create([
            'nim'     => '2440012347',
            'nama'    => 'Cahya Retno',
            'quiz'    => 70,
            'tugas'   => 75,
            'absensi' => 73,
            'praktek' => 68,
            'uas'     => 74,
            'total'   => 72,
            'grade'   => 'C'
        ]);

        Nilai::create([
            'nim'     => '2440012348',
            'nama'    => 'Deni Suharjo',
            'quiz'    => 60,
            'tugas'   => 64,
            'absensi' => 59,
            'praktek' => 61,
            'uas'     => 65,
            'total'   => 62,
            'grade'   => 'D'
        ]);
    }
}
