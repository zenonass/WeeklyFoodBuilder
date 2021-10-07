<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    public function recipes(){
        return $this->belongsToMany(Recipe::class);
    }

    public function builders(){
        return $this->belongsToMany(Builder::class);
    }
}
