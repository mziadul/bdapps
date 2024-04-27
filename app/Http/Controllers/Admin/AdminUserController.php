<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

class AdminUserController extends Controller
{
    public function list() 
    {
        $is_active = 'admin_list';
        $admins = Admin::orderBy('id', 'desc')->paginate(15);
        return view('admin.pages.admin.list', compact('admins', 'is_active'));
    }


    public function create() 
    {
        $is_active = 'admin_create';
        return view('admin.pages.admin.create', compact('is_active'));
    }


    public function store(Request $request) 
    {
        $this->validate($request,[
            'email'=>'required|email|unique:admins,email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required'
        ]);

        $data = $request->all();
        $data['status'] = 1;
        $data['role_name'] = 'super_admin';
        $data['status'] = 1;
        $data['password'] = Hash::make($request->password);
        // dd($data);
        Admin::create($data);

        $message="New admin has created.";
        return redirect()->route('admin.admin_user')->with('message',$message)->with('classs','success');
    }


    public function edit($id) {
        $is_active = 'admin_list';
        $admin = Admin::where('id', $id)->first();
        return view('admin.pages.admin.edit', compact('admin', 'is_active'));
    }


    public function update($id, Request $request) {
        // dd($request->all());

        $this->validate($request, [
            'email'=>"required|email|unique:admins,email,$id",
        ]);  

        $admin = Admin::where('id', $id)->first();
        if (! $admin) {
            $message="Something Went Wrong!";
            return redirect()->back()->with('message',$message)->with('classs','danger');
        }
        $admin->name = $request->input('name');
        $admin->phone = $request->input('phone');

        $pass = trim($request->input('password'));
        $passConf = trim($request->input('password_confirmation'));

        $message="Successfully admin user updated!";
        
        if ($pass != null && $pass != '' && $pass === $passConf){
            $admin->password = Hash::make($pass);
            $message="Successfully admin updated with password!";
        }

        $admin->save();
        return redirect()->back()->with('message',$message)->with('classs','success');
    }


    public function delete($id) {

        $admin = Admin::where('id', $id)->first();
        if(! $admin){
            return redirect()->back()->with('message','No admin has deleted.')->with('classs','danger');
        }
        $admin->delete();

        return redirect()->back()->with('message','This admin has deleted')->with('classs','success');

    }


    public function disable ( Request $request ) {
        // dd($request->all());
        $admin = Admin::where('id', $request->id)->first();
        $admin->status = !$admin->status;
        $admin->save();

        if ($admin->status) {
            $message="admin Has Enabled!";
        } else {
            $message="admin Has Disabled!";
        }
        return redirect()->route('admin.admin_user')->with('message', $message)->with('classs', 'success');

    }
}
