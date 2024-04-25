<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class AndroidDevListController extends Controller
{
    public function list() 
    {
        $is_active = 'dev_list';
        $all_dev_user = User::orderBy('id', 'desc')->get();
        return view('admin.pages.user.list', compact('is_active', 'all_dev_user'));
    }

    public function detail($id) 
    {
        $is_active = 'dev_list';
        $dev_user = User::where('id', $id)->first();
        return view('admin.pages.user.detail', compact('is_active', 'dev_user'));
    }
}
