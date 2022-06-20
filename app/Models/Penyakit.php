<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit',
        'penyebab_penyakit',
        'solusi_penyakit',
        'gambar_penyakit',
    ];
}
