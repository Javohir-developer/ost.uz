<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vdiyo extends Model
{
    protected $table = 'vdiyo';
    protected $fillable = [
        'id',
        'title',
        'about ',
        'link ',
        'image ',

    ];
    public $timestamps = false;
}
