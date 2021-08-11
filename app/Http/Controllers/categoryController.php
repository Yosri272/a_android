<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class categoryController extends Controller
{
    public function index(){
//return view('layout.category/category ');
$categoryData = category::all();
return view('category/category' ,compact('categoryData'));

    }
    public function create( )
    {

        return view('category/categoryCereate');
    
    
    }
    
    public function Stort( Request $request )
    {
  
    $category= new category;
    $category->name = $request->name;
    $category->save();
    return view('category/categoryCereate','inserted completed');


    }
    public function update(Request $request, $id){

        $update= category::find($id);
        $update->name = $request->name;
       
        $update->save();
        return redirect()->route('category');
    
    
    }
    
    public function edit($id)
    {
        $edit = category::where('id','=',$id)->first();
       return view('category/editcategory',compact('edit'));
    
    }
    public function distory($id)
    {
    
        $Delcategory = category::find($id);
        $Delcategory->delete();
        return back();
        
    
    }
    
    
}    