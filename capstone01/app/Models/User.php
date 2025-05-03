<?php

namespace App\Models;
use App\Models\Admin;
use App\Models\NutritionResult;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'age',
        'weight',
        'height',
        'activity_level',
        'status',
    ];
    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }
    public function nutritionResults()
    {
        return $this->hasMany(NutritionResult::class, 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
