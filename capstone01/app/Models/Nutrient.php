<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutrient extends Model
{
    protected $fillable = ['id', 'name', 'unit_name'];

    public $incrementing = false; // karena ID dari USDA bisa bukan auto-increment

    public function foodNutrients()
    {
        return $this->hasMany(FoodNutrient::class);
    }
}
