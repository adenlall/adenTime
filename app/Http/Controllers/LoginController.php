<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid information, please try again!');
        }

        return redirect()->route('dashboard');

        // dd($request->email);
    }
}
