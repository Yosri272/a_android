<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\doctor;
use App\spe;
use App\local;
use App\city;

class c_doctorController extends Controller
{
    public function c_doctor(Request $request)
    {
        $spe = spe::all();
        $city = DB::table('city')->get();
        return view('admin.createdoctor' ,compact('spe','city'));

    }
    public function Stort( Request $request)
    {


    $doctor= new doctor;
  $doctor->d_name = $request->d_name;
  $doctor->d_spe = $request->d_spe;
  $doctor->d_address =$request->city;
  $v2=$doctor->d_city =$request->d_city;
  $doctor->d_phone =$request->d_phone;
  $doctor->d_mo =$request->d_mo;
//dd($v2);
  $doctor->d_flag = 0;
  $doctor->save();
  return back()->with('success','تم الاضافة بنجاح');

    }
    public function emphasis($id)
    {
        $emphasis = doctor::where('id','=',$id)->first();
        $emphasis->d_flag=1;
        $emphasis->save();
        return back()->with('emphasis','تم التاكيد بنجاح');
    }


    public function GetSubCatAgainstMainCatEdit($c_city){
        echo json_encode(DB::table('local')->where('c_city', $c_city)->get());


    }


}

