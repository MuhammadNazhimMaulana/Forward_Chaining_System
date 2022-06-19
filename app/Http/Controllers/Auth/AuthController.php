<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {

        $data = [
            "title" => "Dokter",
        ];

        return view('Admin/Dokter/view_dokter', $data);
    }
}
