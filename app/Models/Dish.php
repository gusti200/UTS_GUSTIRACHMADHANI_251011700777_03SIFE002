<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['name', 'origin_region', 'ingredients', 'price', 'image', 'description'];

    public function getIngredientListAttribute(): array
    {
        return array_map('trim', explode(',', $this->ingredients));
    }
}
