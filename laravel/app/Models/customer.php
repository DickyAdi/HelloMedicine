<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class customer extends Authenticatable 
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'nama',
        'username',
        'email',
        'password'
    ];
    // protected $guarded = ['id'];
}
