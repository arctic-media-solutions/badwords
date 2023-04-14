<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BadWord;

class BadWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $badWords = [
            'hello',
            'world',
            'SS',
            'KK',
            '14/88',
        ];

        foreach ($badWords as $badWord) {
            BadWord::create([
                'word' => $badWord,
                'category_id' => 1,
                'is_regex' => false,
                'is_case_sensitive' => false,
                'is_whole_word' => true,
                'is_enabled' => true,
            ]);
        }
    }
}
