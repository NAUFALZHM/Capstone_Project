<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods'; // atau sesuaikan dengan nama tabel di database kamu

    protected $fillable = ['fdc_id', 'description', 'data_type'];

    protected $primaryKey = 'fdc_id';
    public $incrementing = false; // karena fdc_id bukan auto-increment
    protected $keyType = 'int';

    public function nutrients()
    {
        return $this->hasMany(FoodNutrient::class, 'fdc_id', 'fdc_id')
                    ->with('nutrient');
    }
}
