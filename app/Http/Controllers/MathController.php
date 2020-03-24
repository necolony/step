<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MathController extends Controller
{
    //足し算を行う
    public function sum($x, $y){
        $sum = $x + $y;
        return view('sum',['x'=>$x,'y'=>$y,'sum'=>$sum]);
    }
}
