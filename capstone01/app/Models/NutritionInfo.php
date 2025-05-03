<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionInfo extends Model
{
    protected $primaryKey = 'info_id';
    protected $fillable = ['content', 'category', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}