<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edukasi extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'exert', 'body', 'photo'];
}
