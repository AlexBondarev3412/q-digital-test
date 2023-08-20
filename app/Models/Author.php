<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'pivot'
    ];
}
