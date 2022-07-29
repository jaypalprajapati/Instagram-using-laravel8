<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\post;
use App\models\User;

class like extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsToMany(post::class);
    }
}
