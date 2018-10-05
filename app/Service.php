<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name','details', 'category', 'lat', 'lng','filename'];
}
