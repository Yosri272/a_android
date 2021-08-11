<?php

namespace App\Http\Controllers\editpassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class e_passwordController extends Controller
{
    public function index()
    {
        
        return view('editpassword/e_password');
    
    
    }
    public function Stort( Request $request,$id)
   {
   $ver= $request->o_password;
   $post = User::where('id','=',$id)->first();
   $post->password =Hash::make($request->input('n_password'));
   $post->save();
   return back()->with('success', 'تم تعديل كلمة السر بنجاح');
   
   }

}
