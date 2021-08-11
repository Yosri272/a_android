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
}
