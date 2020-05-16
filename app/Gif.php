<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gif extends Model
{
    protected $fillable = [
        'code', 'url'
    ];
}
