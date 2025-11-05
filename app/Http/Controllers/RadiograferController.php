<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RadiograferController extends Controller
{
    public function index()
    {
        return view('radiografer.dashboard');
    }
}
