<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BadWord;
use App\Models\Category;
use App\Models\TeamWord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckWordsController extends Controller
{
    public function checkWords(Request $request)
    {
        $validated = $this->validateRequest($request);
    
        $words = explode(' ', $validated['text']);
    
        if (isset($validated['categories'])) {
            $categories = $validated['categories'];
        } else {
            $categories = Category::pluck('name')->toArray();
        }
    
        $team_id = Auth::user()->currentTeam->id;
    
        $results = BadWord::whereIn('word', $words)
            ->whereIn('category_id', function ($query) use ($categories) {
                $query->select('id')
                    ->from('categories')
                    ->whereIn('name', $categories);
            })
            ->orWhereIn('word', function ($query) use ($team_id) {
                $query->select('word')
                    ->from('team_words')
                    ->where('team_id', $team_id);
            })
            ->get();
    
        if ($results->isEmpty()) {
            return response()->json(['message' => 'No bad words found.'], 200);
        }
    
        $formattedResults = $results->map(function ($result) {
            return [
                'category' => $result->category->name,
                'word' => $result->word,
            ];
        });
    
        return response()->json(['bad_words' => $formattedResults], 200);
    }
    
    

    protected function validateRequest(Request $request)
    {
        return $request->validate([
            'text' => 'required|string',
            'categories' => 'sometimes|array',
            'categories.*' => 'exists:categories,name',
        ]);
    }

    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }
}
