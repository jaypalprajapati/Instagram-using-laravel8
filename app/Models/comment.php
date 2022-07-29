<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\post;
use App\models\User;
use App\models\like;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',
        'body_cmt',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post()
    {
        return $this->belongsTo(post::class, 'post_id');
    }
}
