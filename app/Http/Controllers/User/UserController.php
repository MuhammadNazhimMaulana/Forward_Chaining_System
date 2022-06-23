<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Penyakit, Gejala, Aturan};

class UserController extends Controller
{
    // Konsultasi User
    public function konsultasi(Request $request)
    {
        // Mencari Gejala
        $gejala = Gejala::where('kode_gejala', $request->kode_gejala)->first();

        // Mencari Rule
        $rule = Aturan::where('kode_gejala', $request->kode_gejala)->first();

        $data = [
            "title" => "Konsultasi",
            "symptom" => $gejala
        ];

        // Jika Ya atau tidak ada
        if($request->jika_ya !== null)
        {
            // Checking code key
            $key = substr($rule->jika_ya,0,1);

            if($key == "G")
            {
                $new_gejala = Gejala::where('kode_gejala', $rule->jika_ya)->first();
                $data['symptom'] = $new_gejala;
            }else if($key == "P"){
                $penyakit = Penyakit::where('kode_penyakit', $rule->jika_ya)->first();

                // Adding Illness
                $data['illness'] = $penyakit;

                return view('User/hasil_konsultasi', $data);
            }

            
        }else if($request->jika_tidak !== null)
        {
            // Checking code key
            $key = substr($rule->jika_tidak,0,1);

            if($key == "G")
            {
                $new_gejala = Gejala::where('kode_gejala', $rule->jika_tidak)->first();
                $data['symptom'] = $new_gejala;
            }else if($key == "P"){
                $penyakit = Penyakit::where('kode_penyakit', $rule->jika_tidak)->first();

                // Adding Illness
                $data['illness'] = $penyakit;

                return view('User/hasil_konsultasi', $data);
            }

        }

        return view('User/konsultasi', $data);
    }
}
