<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raw extends Model
{
    use HasFactory;

    protected $table = 'raws';

    protected $fillable = [
        'name',
        'page',
    ];
}
