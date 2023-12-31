<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];
    protected $hidden = [
        'id',
    ];
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'authors_books');
    }
}
