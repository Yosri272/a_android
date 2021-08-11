<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\doctor;
use App\spe;
use App\local;
use App\city;
class c_doctorController extends Controller
{
    public function c_doctor()
    {
        $spe = spe::all();
        $city = city::all();
        foreach($city as $data)

        {

            $data->c_city ;

        }
        if($data->input('later')== 'on')
            {
                 
                 dd( $data);

            }
          
        
        $local = local::all();
            
            

          
            

            return view('admin/createdoctor' ,compact('spe','local','city'));
       

                   

    
    }
    public function Stort( Request $request)
    {
    
    
    $doctor= new doctor;
  $doctor->d_name = $request->d_name;
  $doctor->d_spe = $request->d_spe;
  $doctor->d_address =$request->d_address;
  $doctor->d_city =$request->d_city;
  $doctor->d_phone =$request->d_phone;
  $doctor->d_mo =$request->d_mo;
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
}
