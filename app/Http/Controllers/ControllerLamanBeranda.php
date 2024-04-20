<?php

namespace App\Http\Controllers;
use App\Models\beranda;

use Illuminate\Http\Request;

class ControllerLamanBeranda extends Controller
{
    //
public function index() {

    return view("layouts.laman_beranda");
    
}
}
