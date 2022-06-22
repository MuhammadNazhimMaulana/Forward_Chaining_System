<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aturan;

class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aturan::create([
            'kode_gejala' => 'G01',
            'jika_ya' => 'G11',
            'jika_tidak' => 'G11'
        ]);

        Aturan::create([
            'kode_gejala' => 'G11',
            'jika_ya' => 'G12',
            'jika_tidak' => 'G05'
        ]);

        Aturan::create([
            'kode_gejala' => 'G12',
            'jika_ya' => 'G26',
            'jika_tidak' => 'G13'
        ]);

        Aturan::create([
            'kode_gejala' => 'G26',
            'jika_ya' => 'P008',
            'jika_tidak' => 'P008'
        ]);

        Aturan::create([
            'kode_gejala' => 'G13',
            'jika_ya' => 'G25',
            'jika_tidak' => 'G05'
        ]);

        Aturan::create([
            'kode_gejala' => 'G05',
            'jika_ya' => 'P006',
            'jika_tidak' => 'G03'
        ]);

        Aturan::create([
            'kode_gejala' => 'G03',
            'jika_ya' => 'G04',
            'jika_tidak' => 'G07'
        ]);

        Aturan::create([
            'kode_gejala' => 'G04',
            'jika_ya' => 'G06',
            'jika_tidak' => 'G06'
        ]);

        Aturan::create([
            'kode_gejala' => 'G06',
            'jika_ya' => 'P001',
            'jika_tidak' => 'G18'
        ]);

        Aturan::create([
            'kode_gejala' => 'G15',
            'jika_ya' => 'P001',
            'jika_tidak' => 'G18'
        ]);

        Aturan::create([
            'kode_gejala' => 'G18',
            'jika_ya' => 'P007',
            'jika_tidak' => 'G21'
        ]);

        Aturan::create([
            'kode_gejala' => 'G21',
            'jika_ya' => 'G30',
            'jika_tidak' => 'G07'
        ]);

        Aturan::create([
            'kode_gejala' => 'G30',
            'jika_ya' => 'G31',
            'jika_tidak' => 'G31'
        ]);

        Aturan::create([
            'kode_gejala' => 'G31',
            'jika_ya' => 'P003',
            'jika_tidak' => 'P003'
        ]);

        Aturan::create([
            'kode_gejala' => 'G07',
            'jika_ya' => 'G10',
            'jika_tidak' => 'G32'
        ]);

        Aturan::create([
            'kode_gejala' => 'G10',
            'jika_ya' => 'G12',
            'jika_tidak' => 'G32'
        ]);

        Aturan::create([
            'kode_gejala' => 'G29',
            'jika_ya' => 'P010',
            'jika_tidak' => 'P010'
        ]);

        Aturan::create([
            'kode_gejala' => 'G14',
            'jika_ya' => 'G15',
            'jika_tidak' => 'P013'
        ]);

        Aturan::create([
            'kode_gejala' => 'G32',
            'jika_ya' => 'G33',
            'jika_tidak' => 'G02'
        ]);

        Aturan::create([
            'kode_gejala' => 'G33',
            'jika_ya' => 'P004',
            'jika_tidak' => 'G28'
        ]);

        Aturan::create([
            'kode_gejala' => 'G28',
            'jika_ya' => 'P005',
            'jika_tidak' => 'P005'
        ]);

        Aturan::create([
            'kode_gejala' => 'G02',
            'jika_ya' => 'G08',
            'jika_tidak' => 'G08'
        ]);

        Aturan::create([
            'kode_gejala' => 'G08',
            'jika_ya' => 'G19',
            'jika_tidak' => 'G19'
        ]);

        Aturan::create([
            'kode_gejala' => 'G19',
            'jika_ya' => 'G25',
            'jika_tidak' => 'G25'
        ]);

        Aturan::create([
            'kode_gejala' => 'G25',
            'jika_ya' => 'G28',
            'jika_tidak' => 'G28'
        ]);

        Aturan::create([
            'kode_gejala' => 'G27',
            'jika_ya' => 'G16',
            'jika_tidak' => 'P002'
        ]);

        Aturan::create([
            'kode_gejala' => 'G16',
            'jika_ya' => 'P009',
            'jika_tidak' => 'P009'
        ]);
    }
}
