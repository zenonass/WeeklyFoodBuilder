<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','preparation_time','total_price','vegetarian'
    ];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }
}
