<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\doctor;


class m_viewController extends Controller
{
    public function index(){
        //return view('layout.products');
        $m_viewData = doctor::all()->where('d_flag','=','1');
        return view('admin/m_view' ,compact('m_viewData'));
}
public function distory($id)
{

    $Delm_view = doctor::find($id);
    $Delm_view->delete();
    return back()->with('error','تم الحذف بنجاج');
    

}
public function update(Request $request, $id){

    $update= doctor::find($id);
    $update->d_name = $request->d_name;
    $update->d_spe = $request->d_spe;
    $update->d_mo = $request->d_mo;
    $update->d_phone = $request->d_phone;
    $update->d_city = $request->d_city;
    $update->d_address = $request->d_address;
    $update->save();
    return redirect()->route('m_view')

    ->with('warning','Dont Open this link');
}

public function edit($id)
{
    $edit = doctor::where('id','=',$id)->first();
   return view('admin/edit',compact('edit'));

}
}
