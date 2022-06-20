<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
      
        $data = [
            "title" => "Rule",
        ];

        return view('CRUD/Rule/index', $data);  
    }
}
