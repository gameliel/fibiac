<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title', 'status', 'type', 'price', 'area', 'bedroom', 'bathroom', 'gallery', 'address', 'city', 'state', 'zip_code', 'description',
    ];
}
