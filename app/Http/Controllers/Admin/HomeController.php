<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Models\Traffic;

class HomeController extends Controller
{
    public function index(Request $request) {
        // dd('admin HomeController 2024');
        $is_active = '';
        $traffic_data = Traffic::select( 
                DB::raw('count(id) tot_user'),
                'date'
            )
            ->groupBy('date')
            ->orderBy('date','desc')
            ->paginate(15);
        // dd($traffic_data);

        return view('admin.pages.home', compact('is_active', 'traffic_data'));
    }
}
