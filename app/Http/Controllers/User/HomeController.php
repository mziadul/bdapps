<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use App\Models\User;

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
        Validator::extend('chkoperator', function($attribute, $value, $parameters){

            if(substr($value, 0, 3) == '013' || substr($value, 0, 3) == '014' || substr($value, 0, 3) == '015' || substr($value, 0, 3) == '016' || substr($value, 0, 3) == '017' || substr($value, 0, 3) == '018' || substr($value, 0, 3) == '019'){
                return true;
            }else{
                return false;
            }

        });

        $this->validate($request,[
            'full_name'=>'required',
            'mobile_number'=>'required|min:11|max:11|chkoperator',
            'email'=>'required|email|unique:users,email',
            'home_address'=>'required',
            'current_address'=>'required',
            'division'=>'required',
            'educational_background'=>'required',
        ],
        [
            'mobile_number.chkoperator' => 'Mobile Number must be valid',
            'mobile_number.min' => 'Mobile Number must be 11 characters long',
            'mobile_number.max' => 'Mobile Number cannot be more than 11 characters',
        ]);

        $user = new User;
        $user->full_name = $request->full_name;
        $user->mobile_number = $request->mobile_number;
        $user->email = $request->email;
        $user->home_address = $request->home_address;
        $user->current_address = $request->current_address;
        $user->division = $request->division;
        $user->educational_background = $request->educational_background;

        $user->has_pc = $request->has_pc;
        $user->has_wifi = $request->has_wifi;
        $user->has_programming_experience = $request->has_programming_experience;
        $user->programming_experience = ($request->has_programming_experience == 'yes') ? $request->programming_experience : null;
        $user->programming_experience_rate = ($request->has_programming_experience == 'yes') ? $request->programming_experience_rate : null;

        $user->has_android_experience = $request->has_android_experience;
        $user->android_experience = ($request->has_android_experience) ? $request->android_experience : null;
        $user->android_experience_rate = ($request->has_android_experience) ? $request->android_experience_rate : null;

        $user->allocate_time = $request->allocate_time;
        $user->bear_cost = $request->bear_cost;
        $user->save();

        $message = "Congratulations $user->full_name, Your registration done. You will get an email soon.";
        return redirect()->back()->with('message', $message)->with('classs', 'success');
    }
}
