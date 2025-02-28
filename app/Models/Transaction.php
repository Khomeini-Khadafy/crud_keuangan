<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = ['name', 'category_id', 'date', 'amount', 'note', 'image'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

