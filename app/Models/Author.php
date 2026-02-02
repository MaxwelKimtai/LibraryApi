<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // If you later create an "authors" table, Laravel will auto-detect it
    protected $fillable = [
        'name',
    ];
}
