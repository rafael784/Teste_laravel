<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pearson extends Model
{
    protected $fillable =
    [
        'name', 'email', 'password', 'image', 'phone'
    ];
}
