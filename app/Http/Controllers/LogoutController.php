<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function index()
    {
        auth()->logout();
        return view('welcome');
    }
}
