<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'author',
        'year',
        'price',
        'genre_id',     // Siguraduhing nandito ito!
        'is_completed',
        'is_featured',
    ];

    protected function casts(): array
    {
        return [
            'is_completed' => 'boolean',
            'year' => 'integer',
        ];
    }

    // Part C: Relationship papunta sa Genre model (singular)
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
}