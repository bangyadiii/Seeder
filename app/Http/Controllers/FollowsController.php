<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        if(Auth::user()->isFollow($user)){
            Auth::user()->unfollow($user);

        }else{
            Auth::user()->follow($user);
        }

        return back()->with('followSucces', 'berhasil memfollow');

    }

    public function following(User $user)
    {
        if(!empty($user))
            return $user->following;
        else
            return null;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function followers(User $user)
    {
        if(!empty($user))
            return $user->followers;
        else
            return null;
    }


}
