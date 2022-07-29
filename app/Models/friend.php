<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friend extends Model
{
    use HasFactory;
    protected $fillable = [
        'requester',
        'user_requested',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function post()
    {
        return $this->belongsTo(post::class,'user_id');
    }
    public function user1()
    {
        return $this->belongsTo(User::class, 'requester');
    }
}
