<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }


    public function type()
    {
        return $this->belongsTo(TypeOfRecipe::class, 'type_id');
    }


    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipes_has_ingredients')->withPivot('quantity');
    }
}
