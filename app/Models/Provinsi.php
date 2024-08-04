<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'provinsi',
        'year_2019',
        'year_2020',
        'year_2021',
        'year_2022',
        'year_2023',
        'cluster',
    ];
}
