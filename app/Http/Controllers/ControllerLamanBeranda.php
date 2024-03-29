<?php

namespace App\Http\Controllers;
use App\Models\beranda;

use Illuminate\Http\Request;

class ControllerLamanBeranda extends Controller
{
    //
    public function index() {
        return view("layouts.laman_beranda")
                ->with('footer', view("component.footer"))
                ->with('navbar', view("component.navbar"));
    }
    

    // public function navbar() {
    //     return view("component.navbar");
    // }
    
    // public function footer() {
    //     return view("component.footer");
    // }
    


}
