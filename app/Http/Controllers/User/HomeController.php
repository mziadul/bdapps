<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        $tabIndex = $request->tab;
        return view('user.pages.home', compact('tabIndex'));
    }

    public function registration(Request $request) {
        // dd('Registration');
        $tabIndex = 7;
        return view('user.pages.team-regis', compact('tabIndex'));
    }

    public function storeRegistration(Request $request) {
        dd($request->all());
    }
}
