<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Konsultasi;

class KonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Konsultasi::create([
            'pengguna' => 'saya',
            'waktu' => '07-06-2021',
            'kesimpulan' => 'Tanaman Jagung mengalami penyakit Hawar Daun, yang di sebabkan oleh Jamur Helminthosporium\r\nturcicum, penanggulangan bisa dilakukan dengan cara',
        ]);

        Konsultasi::create([
            'pengguna' => 'aku',
            'waktu' => '07-06-2021',
            'kesimpulan' => 'Tanaman Jagung mengalami penyakit Gosong, yang di sebabkan oleh Jamur Ustilago maydis\r\n, penanggulangan bisa dilakukan dengan cara',
        ]);
    }
}
