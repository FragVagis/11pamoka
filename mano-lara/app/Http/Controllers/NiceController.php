<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($kiek, $abc = 'Dramblys')
    {
        dump($abc);
        return view('kitkas.fun', ['super' => $abc]);
    }
}