<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index()
    {
        return view('index', ['nama' => 'Candra Nugraha']);
    }

    public function about()
    {
        return view('about');
    }
}
