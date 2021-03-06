<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'username',
        'bio',
        'birth_date',
        'email',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function makePost($string){
        $this->posts()->create([
            'content' => $string,
            'identifier' => Str::slug(Str::random(15) . $this->id),
        ]);

    }

    //relasi tabel user dengan following
    public function following(){
        return $this->belongsToMany(User::class, "follows" , "user_id", "following_user_id")->withTimestamps();
    }

    //relasi tabel user dengan tabel follow untuk follower

    public function followers(){
        return $this->belongsToMany(User::class, "follows" , "following_user_id", "user_id")->withTimestamps();

    }

    //method untuk memfollow user
    public function follow(User $user){
        return $this->following()->save($user);

    }
    public function isFollow(User $user){
        return $this->following()->where('following_user_id', $user->id)->exists();

    }
    //method untuk unfollow user
    public function unfollow(User $user){
        return $this->following()->detach($user);

    }

    //method untuk mendapatkan timeline
    public function timeline(){
        $follows = $this->following->pluck('id');

        return Post::where('user_id', $this->id)
                ->limit(4)
                ->orWhereIn('user_id', $follows)
                ->latest()
                ->get();
    }
    //relasi tabel
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    //bikin komen
    public function makeComment($comment){
        $this->post()->create([
            'content' => $comment,
            'identifier' => Str::slug(Str::random(15) . $this->id),
        ]);

    }
}
