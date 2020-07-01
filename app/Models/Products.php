<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public $rules = [
        'title' => 'max:255',
        'body' => 'max:255',
        'image' => 'image',
        'firm_id' => 'max:255',

    ];
    protected $fillable = [
        'title',
        'body',
        'firm_id',

    ];
    public $timestamps = false;
}
