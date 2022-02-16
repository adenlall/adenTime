<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authorization extends Controller
{
    public function index(){
        return view('login');
    }
}
