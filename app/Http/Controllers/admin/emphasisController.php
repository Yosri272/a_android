<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\doctor;

class emphasisController extends Controller
{
    public function index(){
        //return view('layout.products');
        $emphasis = doctor::all()->where('d_flag','=','0');
        return view('admin/emphasis' ,compact('emphasis'));
}
}
