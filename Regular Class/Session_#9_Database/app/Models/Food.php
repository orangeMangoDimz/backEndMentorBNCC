<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // ctrl + p
    use HasFactory;
    protected $table = 'foods';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
