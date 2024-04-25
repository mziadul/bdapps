<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\User;
use App\Exports\UsersExport;

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

    public function export()
    {
        return Excel::download(new UsersExport(), 'devUser-'.date('Y-m-d').'.xlsx');
    }
}
