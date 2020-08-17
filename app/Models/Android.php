<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Android extends Model
{
    protected $table = 'android';
    protected $fillable = [
        'id',
        'title',
        'about ',
        'link ',
        'image ',

    ];
    public $timestamps = false;
}
