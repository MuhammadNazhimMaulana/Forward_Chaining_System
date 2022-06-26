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
            'kode_gejala' => 'G35',
            'jika_ya' => 'G36',
            'jika_tidak' => 'G36'
        ]);

        Aturan::create([
            'kode_gejala' => 'G36',
            'jika_ya' => 'G37',
            'jika_tidak' => 'G38'
        ]);

        Aturan::create([
            'kode_gejala' => 'G37',
            'jika_ya' => 'P014',
            'jika_tidak' => 'P014'
        ]);

        Aturan::create([
            'kode_gejala' => 'G38',
            'jika_ya' => 'P015',
            'jika_tidak' => 'G39'
        ]);

        Aturan::create([
            'kode_gejala' => 'G39',
            'jika_ya' => 'G40',
            'jika_tidak' => 'G41'
        ]);

        Aturan::create([
            'kode_gejala' => 'G40',
            'jika_ya' => 'P016',
            'jika_tidak' => 'P016'
        ]);

        Aturan::create([
            'kode_gejala' => 'G41',
            'jika_ya' => 'P017',
            'jika_tidak' => 'G42'
        ]);

        Aturan::create([
            'kode_gejala' => 'G42',
            'jika_ya' => 'P018',
            'jika_tidak' => 'G43'
        ]);

        Aturan::create([
            'kode_gejala' => 'G43',
            'jika_ya' => 'G44',
            'jika_tidak' => 'G45'
        ]);

        Aturan::create([
            'kode_gejala' => 'G44',
            'jika_ya' => 'P019',
            'jika_tidak' => 'P019'
        ]);

        Aturan::create([
            'kode_gejala' => 'G45',
            'jika_ya' => 'P020',
            'jika_tidak' => 'G46'
        ]);

        Aturan::create([
            'kode_gejala' => 'G46',
            'jika_ya' => 'G47',
            'jika_tidak' => 'G48'
        ]);

        Aturan::create([
            'kode_gejala' => 'G47',
            'jika_ya' => 'P021',
            'jika_tidak' => 'P021'
        ]);

        Aturan::create([
            'kode_gejala' => 'G48',
            'jika_ya' => 'G49',
            'jika_tidak' => 'G50'
        ]);

        Aturan::create([
            'kode_gejala' => 'G49',
            'jika_ya' => 'P022',
            'jika_tidak' => 'G51'
        ]);

        Aturan::create([
            'kode_gejala' => 'G50',
            'jika_ya' => 'P023',
            'jika_tidak' => 'G52'
        ]);

        Aturan::create([
            'kode_gejala' => 'G51',
            'jika_ya' => 'P024',
            'jika_tidak' => 'G52'
        ]);

        Aturan::create([
            'kode_gejala' => 'G52',
            'jika_ya' => 'G53',
            'jika_tidak' => 'G54'
        ]);

        Aturan::create([
            'kode_gejala' => 'G53',
            'jika_ya' => 'P025',
            'jika_tidak' => 'P025'
        ]);

        Aturan::create([
            'kode_gejala' => 'G54',
            'jika_ya' => 'G55',
            'jika_tidak' => 'G35'
        ]);

        Aturan::create([
            'kode_gejala' => 'G55',
            'jika_ya' => 'P026',
            'jika_tidak' => 'P026'
        ]);
    }
}
