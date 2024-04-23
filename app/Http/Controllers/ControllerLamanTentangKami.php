<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLamanTentangKami extends Controller
{
    //
    public function index() {

        return view("layouts.laman_tentangkami");
        
    }
}
