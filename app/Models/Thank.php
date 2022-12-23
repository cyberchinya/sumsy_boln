<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thank extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
