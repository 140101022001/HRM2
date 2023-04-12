<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userlogin extends Authenticatable
{
    use HasFactory;
    protected $table = 'userlogin';
    protected $fillable = [
        'name',
        'dateofbirth',
        'email',
        'password',
    ];
}
