<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    use HasFactory;
    protected $table = 'food';

    protected $fillable = [
        'name',
        'cuisine',
        'price'
    ];
}
