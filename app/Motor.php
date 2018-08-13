<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable=[
        'model',
        'price',
        'color',
        'weight'
    ];
    public function getPriceAttribute($price)
    {
        return '$'. number_format($price);
    }
}
