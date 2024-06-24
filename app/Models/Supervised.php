<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervised extends Model
{
    use HasFactory;

    protected $fillable = [
        'namamhs',
        'topik',
        'tahun',
    ];
}