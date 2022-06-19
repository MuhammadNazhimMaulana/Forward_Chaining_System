<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        $data = [
            "title" => "Home",
        ];

        return view('Home/home_user', $data);
    }
}
