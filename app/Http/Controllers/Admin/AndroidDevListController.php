<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class AndroidDevListController extends Controller
{
    public function list() {
        $is_active = 'dev_list';
        $all_dev_user = User::orderBy('id', 'desc')->get();
        return view('admin.pages.user.list', compact('all_dev_user', 'is_active'));
    }
}
