<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\spe;
class s_speController extends Controller
{
    public function index()
    {
        
        //return view('admin/category');
       $spe = spe::all();
      
        return view('admin/spe' ,compact('spe'));
    
    }
    public function distory($id)
{

    $Delspe = spe::find($id);
    $Delspe->delete();
    return back()->with('error','تم الحذف بنجاج');

    

}
public function createspe()
{
    
    return view('admin/spe');


}
public function Stort( Request $request)
{


$spe= new spe;
$spe->s_spe = $request->s_spe;
$spe->save();
return back()->with('success','تم الاضافة بنجاح');


}
}

