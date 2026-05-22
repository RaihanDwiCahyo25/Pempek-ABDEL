<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk',
        'slug',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'harga',
        'gambar_path',
        'link_whatsapp',
        'status_active',
        'urutan_produk',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'status_active' => 'boolean',
    ];

    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return $this->gambar_path
            ? asset('storage/' . $this->gambar_path)
            : asset('images/pempek-logo.png');
    }

    public function scopeActive($query)
    {
        return $query->where('status_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('urutan_produk', 'asc')->orderBy('created_at', 'desc');
    }
}
