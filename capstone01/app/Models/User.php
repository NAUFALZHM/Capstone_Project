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
        'gender',
        'password',
        'age',
        'weight',
        'height',
        'activity_level',
        'status',
    ];
    public function calculateIMT()
    {
        if (!$this->height || !$this->weight) return null;
        return round($this->weight / pow($this->height / 100, 2), 2);
    }

    public function calculateCalories()
    {
        if (!$this->gender || !$this->height || !$this->weight || !$this->age) return null;

        $bmr = $this->gender === 'male'
            ? 66 + (13.7 * $this->weight) + (5 * $this->height) - (6.8 * $this->age)
            : 655 + (9.6 * $this->weight) + (1.8 * $this->height) - (4.7 * $this->age);

        $factor = match($this->activity_level) {
            'rendah' => 1.2,
            'sedang' => 1.55,
            'tinggi' => 1.9,
            default => 1,
        };

        return round($bmr * $factor);
    }

    public function statusGizi()
    {
        $imt = $this->calculateIMT();
        if ($imt === null) return 'Tidak diketahui';

        return match (true) {
            $imt < 18.5 => 'Kurus',
            $imt < 25 => 'Normal',
            $imt < 30 => 'Gemuk',
            default => 'Obesitas',
        };
    }

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
