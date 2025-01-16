<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
