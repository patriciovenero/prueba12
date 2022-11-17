<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aventura extends Controller
{
    public function index()
    {
        return view('Aventura');
    }
}
