<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class AndroidDevListController extends Controller
{
    public function list() {
        $all_dev_user = User::orderBy('id', 'desc')->get();
        dd($all_dev_user);
    }
}
