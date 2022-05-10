<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paume extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'titlesecond',
        'url',
        'image',
        'tag',
    ];
    public $timestamps = false;
    protected $table = 'paume';
}
