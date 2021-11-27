<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function index(){

        $posts = auth()->user()->timeline();
        return view('app', [ "posts" => $posts]);
    }

}
