<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerLamanLoginAdmin extends Controller
{
    //
    public function index(){
        return view("admin.laman_login_admin");
    }
}
