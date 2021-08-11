<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bank;

class bankController extends Controller
{
    public function index(){
//return view('layout.products');
$bankData = bank::all();
return view('bank/bank' ,compact('bankData'));

    }
    public function create()
    {

        return view('bank/bankCereate');
    
    
    }
    
    public function Stort( Request $request )
    {
  
    $bank= new bank;
    $bank->name = $request->name;
    $bank->save();
    return view('bank/bankCereate','inserted completed');
   }


   public function update(Request $request, $id){

    $update= bank::find($id);
    $update->name = $request->name;
   
    $update->save();
    return redirect()->route('bank');


}

public function edit($id)
{
    $edit = bank::where('id','=',$id)->first();
   return view('bank/editbank',compact('edit'));

}
public function distory($id)
{

    $Delbank = bank::find($id);
    $Delbank->delete();
    return back();
    

}


}    