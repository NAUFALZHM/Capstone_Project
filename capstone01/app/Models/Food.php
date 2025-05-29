<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Food extends Model
{
    use Searchable;
    protected $table = 'foods';
    protected $fillable = ['name', 'calories', 'protein', 'carbs', 'fat'];

    // Kolom yang akan di-index
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'calories' => $this->calories,
            'protein' => $this->protein,
            'carbs' => $this->carbs,
            'fat' => $this->fat,
            'nutrients' => "{$this->calories} kalori, {$this->protein}g protein, {$this->carbs}g karbohidrat",
            'tags' => $this->generateSearchTags()
        ];
    }

    // Buat tag pencarian otomatis
    protected function generateSearchTags()
    {
        $tags = [strtolower($this->name)];

        // Otomatis generate sinonim
        if (str_contains($this->name, 'ayam')) {
            $tags[] = 'chicken';
            $tags[] = 'daging ayam';
        }

        if (str_contains($this->name, 'nasi')) {
            $tags[] = 'beras';
            $tags[] = 'rice';
        }

        return $tags;
    }

    // Konfigurasi index Algolia
    public function searchableAs()
    {
        return 'foods_index';
    }
}
