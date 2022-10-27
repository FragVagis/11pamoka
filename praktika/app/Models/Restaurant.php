<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'restaurant_id', 'id');
    }
}