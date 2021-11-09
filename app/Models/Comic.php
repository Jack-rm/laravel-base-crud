<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // testing softDeletes feature

class Comic extends Model
{
    use SoftDeletes; // lo passo al model come trait
    
    protected $fillable = ['title', 'series', 'price', 'thumb', 'sale_date', 'description'];
}
