<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passwords extends Model
{
    //
    protected $fillable = ['site', 'username', 'email', 'password', 'category'];
}
