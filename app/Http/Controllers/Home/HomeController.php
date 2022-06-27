<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
    
class HomeController extends Controller
{
    // Home For Admin
    public function home_admin()
    {

        $data = [
            "title" => "Home",
        ];

        return view('Home/home_admin', $data);
    }

    // Home For Admin
    public function home_user()
    {
        // Getting the smallest
        $gejala = Gejala::all();

        $list_gejala = [];
        foreach($gejala as $data)
        {
            $new = str_replace('G', '', $data->kode_gejala);

            // Pushing Array
            array_push($list_gejala, (int) $new);
        }

        $data = [
            "title" => "Home",
            "code" => min($list_gejala)
        ];

        return view('Home/home_user', $data);
    }
}
