<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = ['*'];
    protected $fillable = [
        'title', 'description','user_id',
    ];
}
