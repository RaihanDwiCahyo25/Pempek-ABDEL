<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreInfo extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'label',
        'icon',
        'sort_order',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
