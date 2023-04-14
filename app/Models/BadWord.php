<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class BadWord extends Model
{
    use HasFactory;

    protected $fillable = [
        'word',
        'category_id',
        'is_regex',
        'is_case_sensitive',
        'is_whole_word',
        'is_enabled',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
