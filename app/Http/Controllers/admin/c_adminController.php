<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class c_adminController extends Controller
{
    public function c_admin()
    {
        
        return view('admin/createadmin');
    
    
    }
    public function Stort( Request $request)
    {
    
    
  $admin= new User;
  $admin->name = $request->a_name;
  $admin->email  = $request->a_username;
  $admin->password =Hash::make($request->input('a_password'));
  
  $admin->save();
  return back()->with('success','تم الاضافة بنجاح');
    
}
}