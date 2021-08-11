<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\choose;

class chooseController extends Controller
{
    
        public function index(){
            //return view('layout.products');
            $choose = choose::all();
            return view('admin/choose' ,compact('choose'));
    }
}
