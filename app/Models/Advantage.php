<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'sort_order',
        'is_active',
        'image_path',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
