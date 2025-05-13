<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodNutrient extends Model
{
    protected $fillable = ['fdc_id', 'nutrient_id', 'amount', 'unit_name'];

    public function nutrient()
    {
        return $this->belongsTo(Nutrient::class, 'nutrient_id', 'id');
    }

    public function food()
    {
        return $this->belongsTo(Food::class, 'fdc_id', 'fdc_id');
    }
}
