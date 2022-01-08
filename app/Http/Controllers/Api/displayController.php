<?php

namespace App\Http\Controllers\Api;
use App\local;
use App\city;

use App\spe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class displayController extends Controller
{
    public function index()
    {
    $pro = local::all();
    return response()->json($pro ,200);

    }
    public function index1()
    {
    $pro1 = city::all();
    return response()->json($pro1 ,200);

    }
    public function index2()
    {
    $pro2 = spe::all();
    return response()->json($pro2 ,200);

    }
    public function store(Request $request)
    {
        $bank= new spe;
        $bank->s_spe = $request->s_spe;
        $bank->save();
        return response()->json($bank ,200);

    }
    public function show($id)
    {
        $id=2;
        $show = spe::all()->where('id','=',$id);
        return response()->json($show ,200);

    }
    public function edit($id)
    {
        $edit = spe::where('id','=',$id)->first();
        return response()->json($edit ,200);


    }


    public function update(Request $request, $id)
    {
        $update= spe::find($id);
        $bank->s_spe = $request->s_spe;
        $update->save();
        return response()->json($update ,200);

    }

    public function destroy($id)
    {
        $Delspe = spe::find($id);
        $Delspe->delete();
        return response()->json($Delbank ,200);


    }



}
