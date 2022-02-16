<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        return view('config');

    }
    public function store(Request $request)
    {
        $user = User::findOrFail(Auth()->User()->id);
        $user->timezone = $request->timezone;
        $user->compitition = $request->compitition;
        $user->recommendation = $request->recommendation;
        $user->update();
        return redirect()->back()->with('status','Dashboard Updated Successfully ');

    }

}
