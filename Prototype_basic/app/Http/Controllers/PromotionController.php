<?php

namespace App\Http\Controllers;
use App\Models\promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    public function select(){
        $data = promotion::all();
        return view('index',compact('data'));
    }
}

