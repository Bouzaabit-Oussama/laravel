<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use Illuminate\Http\Request;

class Controller_Promotion extends Controller
{
    //
    public function select (){
        $data = promotion::all ();
        return view('page1',compact('data'));
    }
}
