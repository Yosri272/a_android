<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Products;

class ProductsController extends Controller
{

public function index()
{
//return view('layout.products');
$productsData = Products::all();
return view('products/products' ,compact('productsData'));



}
 public function update(Request $request, $id){

    $update= Products::find($id);
    $update->name = $request->pname;
    $update->des = $request->pdesc;
    $update->price =$request->pprice;
    $update->quantity =$request->pquantity;
    $update->save();
    return redirect()->route('Product');


}

public function edit($id)
{
    $edit = Products::where('id','=',$id)->first();
   return view('products/editProduct',compact('edit'));

}
public function create( ){

    return view('products/productsCereate');


}
public function Stort( Request $request)
{


$products= new products;
$products->name = $request->pname;
$products->des = $request->pdesc;
$products->price =$request->pprice;
$products->img = 'yyyyyyy';
$products->serialNo =$request->psn.rand(0,999999);
$products->quantity =$request->pquantity;
$products->save();
return view('products/productsCereate');

}

public function distory($id)
{

    $DelProducts = Products::find($id);
    $DelProducts->delete();
    return back();
    

}

}