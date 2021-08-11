<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\city;

class c_cityController extends Controller
{
    public function index()
    {
        
        //return view('admin/category');
       $city = city::all();
      
        return view('admin/city' ,compact('city'));
    
    }
    public function distory($id)
{

    $Delcity = city::find($id);
    $Delcity->delete();
    return back()->with('error','تم الحذف بنجاج');

    

}
public function createcity()
{
    
    return view('admin/city');


}
public function Stort( Request $request)
{


$city= new city;
$city->c_city = $request->c_city;


$city->save();
return back()->with('success','تم الاضافة بنجاح');


}
}
