<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        // dd('admin HomeController 2024');
        $is_active = '';
        return view('admin.pages.home', compact('is_active'));
    }
}
