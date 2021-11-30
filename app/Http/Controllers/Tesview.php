<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tesview extends Controller
{
    public function tesview1(){
        return view('showUser');
    }
}
