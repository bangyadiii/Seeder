<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use App\Models\User;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illu{{ mina }}te\Http\Response
     */
    //mengambil semua comment pada setiap post
    public function index(Post $post, User $user)
    {

        $data =  $post->comments->toArray();

        foreach ($data as $key => $comment){
            $data3 = User::find($comment['user_id']);
            $data[$key]['user'] = $data3->toArray();
            // $data2 = User::find($comment['user_id']);
            // $data['user'] = $data3;
        }
        // dd($data);
        // $data2['user'] = User::find($data['user_id']);
        // $data[$key]['user'] = $data2;
        // dd($data);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
        'comments' => 'required|max:1000'
        ]);
        $comments = new Comments();
        $comments->identifier = Str::slug(Str::random(15) . Auth::id());;
        $comments->comments = $request->comments;
        $comments->user_id = Auth::id();
        // dd($comments);
        $post->comments()->save($comments);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
