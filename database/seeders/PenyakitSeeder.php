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
            'kode_penyakit' => 'P014',
            'nama_penyakit' => 'Cendawan Jelaga',
            'penyebab_penyakit' => 'Jamur Meliola Mangifera',
            'solusi_penyakit' => 'Membasmi serangga penghasil cairan manis embun madu dengan tepung belerang. Lakukan juga pengendalian pertumbuhan semut hitam yang merupakan pelindung hama tersebut.',
            'gambar_penyakit' => 'Foto Penyakit/p14.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P015',
            'nama_penyakit' => 'Penyakit Antraknose',
            'penyebab_penyakit' => 'Jamur Colletotrichum Gloeosporiodes',
            'solusi_penyakit' => 'Pemangkasan, menanam mangga jangan terlalu rapat, jangan menanam mangga untuk industri di daerah lembab, bagian tanaman yang kena penyakit dikumpul dan dibakar, semprot dengan dengan fungisida pada gejala awal.',
            'gambar_penyakit' => 'Foto Penyakit/p15.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P016',
            'nama_penyakit' => 'Penyakit Diplodia',
            'penyebab_penyakit' => 'Cendawan atau jamur Botryodiplodia Theobromae',
            'solusi_penyakit' => 'Hati hati dalam memangkas cabang, jangan menyisakan tempat berkembang biak jamur, cabang yang terserang dipotong dan dibakar (lukanya tutup dengan klorox), batang yang terserang dikupas diolesi Benlate',
            'gambar_penyakit' => 'Foto Penyakit/p16.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P017',
            'nama_penyakit' => 'Penyakit Blendok',
            'penyebab_penyakit' => 'Kumbang Xyleborus affinis',
            'solusi_penyakit' => 'Memotong bagian yang sakit, tutup lubang dengan kapas yang telah dicelupkan dengan insektisida, semprot pohon dengan buburbordeaux',
            'gambar_penyakit' => 'Foto Penyakit/p17.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P018',
            'nama_penyakit' => 'Bercak Karat Merah (Daun)',
            'penyebab_penyakit' => 'Ganggang Cephaleuros mycoidea Karst',
            'solusi_penyakit' => 'Memangkas, cabang, ranting yang diserang dan menyemprot dengan fungisida bubuk bordeaux atau sulfat tembaga',
            'gambar_penyakit' => 'Foto Penyakit/p18.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P019',
            'nama_penyakit' => 'Penyakit Gleosporium',
            'penyebab_penyakit' => 'Jamur Gloeosporium mangifera',
            'solusi_penyakit' => 'Pembasmian Jamur dengan semprot fungisida Bubur Bordeaux',
            'gambar_penyakit' => 'Foto Penyakit/p19.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P020',
            'nama_penyakit' => 'Benalu',
            'penyebab_penyakit' => 'Tanaman benalu',
            'solusi_penyakit' => 'Membersihkan benalu yang menempel. Jika sudah parah, potong dahan yang terserang sampai bersih',
            'gambar_penyakit' => 'Foto Penyakit/p20.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P021',
            'nama_penyakit' => 'Hama Kutu Putih',
            'penyebab_penyakit' => 'Kutu Bemisia tabaci',
            'solusi_penyakit' => 'Memotong dahan daun banyak menempel kutu putih kemudian membakarnya. Jika serangan sudah terlanjur parah seluruh daun maka lakukan pemangkasan total dan menyemprotkan insektisida. Lakukan juga pengendalian semut merah penyebab timbulnya hama',
            'gambar_penyakit' => 'Foto Penyakit/p21.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P022',
            'nama_penyakit' => 'Hama Wereng Mangga',
            'penyebab_penyakit' => 'Hama Wereng Mangga',
            'solusi_penyakit' => 'Pengasapan 3 atau 4 kali dalam satu minggu, pemangkasan jika sudah dianggap perlu, lakukan penyemprotan insektisida Diazinon atau sesuai produk',
            'gambar_penyakit' => 'Foto Penyakit/p22.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P023',
            'nama_penyakit' => 'Kelelawar atau Codot',
            'penyebab_penyakit' => 'Kelelawar atau Codot yang memakan buah',
            'solusi_penyakit' => 'Membiarkan predator semut kerangkeng hidup di sela daun mangga, memasang kincir angin yang ada peluit (kitiran), melindungi pohon mangga dengan jaring',
            'gambar_penyakit' => 'Foto Penyakit/p23.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P024',
            'nama_penyakit' => 'Tungau Mangga',
            'penyebab_penyakit' => 'Hama Paratetranychus yothersi, Hemitarsonemus latus',
            'solusi_penyakit' => 'Menyemprotkan tepung belerang, insektisida Diazinon atau Basudin',
            'gambar_penyakit' => 'Foto Penyakit/p24.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P025',
            'nama_penyakit' => 'Kepik mangga',
            'penyebab_penyakit' => 'Hama Cryptorrhynoccus gravis',
            'solusi_penyakit' => 'Membiarkan populasi predator semut merah yang menyebabkan kepik tidak bertelur.',
            'gambar_penyakit' => 'Foto Penyakit/p25.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P026',
            'nama_penyakit' => 'Bisul Daun Mangga',
            'penyebab_penyakit' => 'Larva serangga Procontarinia matteiana dari hasi telur lalat betina',
            'solusi_penyakit' => 'Membuang daun yang terserang hama dan membakarnya, membersihkan lingkungan, membalikkan tanah sekitar, semprot dengan racun anti serangga pada daun waktu sore hari',
            'gambar_penyakit' => 'Foto Penyakit/p26.jpg',
        ]);

        Penyakit::create([
            'kode_penyakit' => 'P027',
            'nama_penyakit' => 'Penyakit Tidak Diketahui',
            'penyebab_penyakit' => 'Tidak Diketahui',
            'solusi_penyakit' => 'Tidak ditemukan penyakit. Tanaman Mangga Anda baik-baik saja',
            'gambar_penyakit' => 'Foto Penyakit/unknown.png',
        ]);
    }
}
