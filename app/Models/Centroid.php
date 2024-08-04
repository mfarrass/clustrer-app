<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centroid extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'centroid_1',
        'centroid_2',
    ];
}
