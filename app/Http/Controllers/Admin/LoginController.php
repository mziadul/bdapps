<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

class LoginController extends Controller
{
    public function login () 
    {
        return view('admin.pages.login.login');
    }


    public function loginValidate ( Request $request ) 
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $output = Admin::where('email', $request->input('email'))->first();
        // dd($output);

        if ( $output && Hash::check($request->input('password'), $output->password) && $output->status ) {
            session()->put('bdapps_aa_admin_mail', $output->email);
            session()->put('bdapps_aa_admin_id', $output->id);
            // dd('logged in');
            return redirect(route('admin.home'));
        } else {
            $message="Invalid Credentials or Account.";
            return redirect()->back()->with('message',$message)->with('classs','danger');
        }
    }


    public function logout()
    {
        session()->flush();
        $message="Successfully Logout!";
        return redirect(route('admin.login'))->with('message',$message)->with('classs','success');
    }
}
