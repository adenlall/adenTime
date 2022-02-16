<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthorizationController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('signup');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'fname' => 'required|max:100',
            'lname' => 'required|max:100',
            'username' => 'required|max:155',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'timezone' => 'required',
        ]);
        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'timezone' => $request->timezone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        Auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');

        // dd($request->email);
    }
}
