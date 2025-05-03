<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionResult extends Model
{
    protected $primaryKey = 'result_id';
    protected $fillable = ['daily_calories', 'recommendations', 'date', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}