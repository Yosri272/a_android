<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\local;
use App\city;
class l_localController extends Controller
{
    public function index()
    {
        $city = city::all();
        //return view('admin/category');
       $local = local::all();

        return view('admin.local' ,compact('local','city'));

    }
    public function distory($id)
{

    $Dellocal = local::find($id);
    $Dellocal->delete();
    return back()->with('error','تم الحذف بنجاج');



}
public function createlocal()
{

    return view('admin/local');


}
public function Stort( Request $request)
{


$local= new local;
$local->l_local = $request->l_local;
$local->c_city = $request->c_city;

$local->save();
return back()->with('success','تم الاضافة بنجاح');


}
}
