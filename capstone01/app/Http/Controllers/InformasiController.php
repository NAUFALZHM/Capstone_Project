<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class InformasiController extends Controller
{
    
    public function showInfo(Request $request)
    {
        $query = $request->input('search');
        $results = collect();

        if ($query) {
            $results = Food::search($query)->get();
            
            // Fallback ke database search jika Algolia error
            if ($results->isEmpty()) {
                $results = Food::where('name', 'like', "%{$query}%")
                            ->orWhere('description', 'like', "%{$query}%")
                            ->limit(10)
                            ->get();
            }
            
        }

        return view('informasi_gizi', compact('results'));
    }
    /**
     * Memecah query menjadi istilah-istilah pencarian
     */
    private function prepareSearchTerms($query)
    {
        $terms = explode(' ', strtolower($query));
        $expandedTerms = [];
        
        foreach ($terms as $term) {
            $expandedTerms[] = $term;
            // Tambahkan sinonim jika ada
            if ($synonyms = $this->getSynonyms($term)) {
                $expandedTerms = array_merge($expandedTerms, $synonyms);
            }
        }
        
        return array_unique($expandedTerms);
    }

    /**
     * Kamus sinonim sederhana
     */
    private function getSynonyms($term)
    {
        $synonyms = [
            'nasi' => ['beras', 'nasiputih'],
            'ayam' => ['daging ayam', 'chicken'],
            'telur' => ['telor', 'egg'],
            'susu' => ['susu sapi', 'milk'],
            // Tambahkan lebih banyak sinonim sesuai kebutuhan
        ];
        
        return $synonyms[$term] ?? [];
    }

    /**
     * Mempersiapkan query untuk boolean full-text search
     */
    private function prepareBooleanSearch($query)
    {
        $terms = explode(' ', $query);
        return implode('* ', $terms) . '*';
    }

    private function naturalLanguageProcessing($query)
    {
        // Normalisasi teks
        $query = strtolower(trim($query));
        
        // Pemahaman intent sederhana
        $intents = [
            'berapa kalori' => ['kalori', 'energi'],
            'kandungan protein' => ['protein'],
            'karbohidrat' => ['karbo', 'karbohidrat'],
        ];
        
        // Ekstrak kata kunci
        $keywords = [];
        foreach ($intents as $intent => $terms) {
            if (strpos($query, $intent) !== false) {
                $keywords = array_merge($keywords, $terms);
            }
        }
        
        // Jika tidak ada intent khusus, gunakan seluruh query
        if (empty($keywords)) {
            $keywords = array_filter(explode(' ', $query), function($word) {
                return strlen($word) > 2; // Abaikan kata pendek
            });
        }
        
        return $keywords;
    }

    private function searchFood($query)
    {
        $foodDatabase = [
            [
                'name' => 'Nasi Putih',
                'calories' => 130,
                'protein' => 2.7,
                'carbs' => 28,
                'fat' => 0.3,
                'description' => 'Nasi putih biasa, 100 gram',
                'keywords' => ['nasi', 'beras', 'nasiputih', 'makanan pokok']
            ],
            // Data lainnya
        ];
        
        $results = [];
        $queryTerms = explode(' ', strtolower($query));
        
        foreach ($foodDatabase as $food) {
            $matchScore = 0;
            $foodKeywords = array_map('strtolower', $food['keywords']);
            
            foreach ($queryTerms as $term) {
                if (in_array($term, $foodKeywords) || 
                    strpos(strtolower($food['name']), $term) !== false ||
                    strpos(strtolower($food['description']), $term) !== false) {
                    $matchScore++;
                }
            }
            
            if ($matchScore > 0) {
                $food['match_score'] = $matchScore;
                $results[] = $food;
            }
        }
        
        // Urutkan berdasarkan kecocokan
        usort($results, function($a, $b) {
            return $b['match_score'] <=> $a['match_score'];
        });
        
        return $results;
    }
}