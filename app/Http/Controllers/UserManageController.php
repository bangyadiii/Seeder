<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

// use Illuminate\Support\Facades\Validator;

class UserManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('registrasi');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required|string|max:255",
            'username' => 'required|unique:users|max:255',
            'birth_date' => 'required|date',
            'email' => 'required|email:dns|max:255',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
            'avatar' => 'file|max:2097152|mimes:jpg,bmp,png'
        ]);
        if($request->file('avatar')){
            $validatedData['avatar'] = $request->file('avatar')->store('avatars');
        }
        // else{
        //     $validatedData['avatar'] = $request->file('https://ui-avatars.com/api/?background=random&name=bangyadiii')->store('avatars');
        // }

        $validatedData['password']  = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect()->route("login");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $user = User::where('username', $request->username )->get()->first();

        // dd($user);
        return view('profile', ["user" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('edit-profile', ["user" => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => "required|string|max:255",
            'birth_date' => 'required|date',
            'email' => 'required|email:dns|max:255',
            'avatar' => 'file|max:2097152|mimes:jpg,bmp,png'
        ]);
        if($request->file('avatar')){
            if($request->oldName){
                Storage::delete($request->oldName);
            }
            $validatedData['avatar'] = $request->file('avatar')->store('avatars');
        }


        User::where("id", $user->id)->update($validatedData);
        return redirect(route('timeline'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // $users = User::find($user->id);
        // $users->following()->detach();
        DB::table('follows')->where('following_user_id', $user->id)->delete();
        DB::table('follows')->where('user_id', $user->id)->delete();
        User::destroy($user->id);
        Simp

        return redirect('login');


    }
}
