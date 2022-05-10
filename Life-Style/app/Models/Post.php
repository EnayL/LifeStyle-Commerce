<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'content',
        'image',
        'date',
        'type',
    ];
    public $timestamps = false;
    protected $table = 'post';
}
