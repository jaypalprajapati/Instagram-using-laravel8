<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\User;
use App\models\comment;
use App\models\like;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'image_post',
        'user_id',
        'post_status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comment()
    {
        return $this->hasMany(comment::class, 'post_id');
    }
    public function like()
    {
        return $this->hasMany(like::class, 'post_id');
    }

    // public function friend()
    // {
    //     return $this->hasMany(friend::class, 'requester')->where('status', '=', 1);
    // }
    public function friend()
    {
        return $this->hasMany(friend::class,'requester','user_id')->where('friends.requester', '=', auth()->user()->id)->where('status', '=', 1);
    }
}
