<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyakit;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penyakit::create([
            'kode_penyakit' => 'P001',
            'nama_penyakit' => 'Hawar Daun',
            'penyebab_penyakit' => 'Jamur Helminthosporium\r\nturcicum',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P002',
            'nama_penyakit' => 'Penyakit Bulai',
            'penyebab_penyakit' => 'Jamur Peronosclerospora\r\nmaydis',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P003',
            'nama_penyakit' => 'Busuk Tongkol Fusarium',
            'penyebab_penyakit' => 'Jamur Fusarium\r\ngraminearum Schwabe',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P004',
            'nama_penyakit' => 'Busuk Tongkol Diplodia',
            'penyebab_penyakit' => 'Jamur Diplodia maydis',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P005',
            'nama_penyakit' => 'Gosong',
            'penyebab_penyakit' => 'Jamur Ustilago maydis\r\n',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P006',
            'nama_penyakit' => 'Karat',
            'penyebab_penyakit' => 'Jamur Puccinia Sorghidan Puccinia Polysora',
            'solusi_penyakit' => 'Pembasmian Jamur Puccinia dengan Obat Tertentu',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P007',
            'nama_penyakit' => 'Virus Mosaik',
            'penyebab_penyakit' => 'Myzus persica',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P008',
            'nama_penyakit' => 'Kekurangan Nitrogen (N)',
            'penyebab_penyakit' => 'Kekurangan Nitrogen (N)',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P009',
            'nama_penyakit' => 'Kekurangan Fosfor (P)',
            'penyebab_penyakit' => 'Kekurangan Fosfor (P)',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P010',
            'nama_penyakit' => 'Kekurangan Kalium (K)',
            'penyebab_penyakit' => 'Kekurangan Kalium (K)',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P011',
            'nama_penyakit' => 'Kekurangan Belerang (S)',
            'penyebab_penyakit' => 'Kekurangan Belerang (S)',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P012',
            'nama_penyakit' => 'Kekurangan Zat Besi (Fe)',
            'penyebab_penyakit' => 'Kekurangan Zat Besi (Fe)',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P013',
            'nama_penyakit' => 'Kekurangan Seng (Zn)',
            'penyebab_penyakit' => 'Kekurangan Seng (Zn)',
            'solusi_penyakit' => '',
            'gambar_penyakit' => '-',
        ]);
    }
}
