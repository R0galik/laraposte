<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    protected $fillable = [
        'user_id','paste','name'
    ];

    public static function incomplete() {
        return static ::where('completed', 0)->get();
    }
}
