<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    protected $table = 'tentang_kamis';
    
    protected $fillable = [
        'section_subtitle',
        'section_title',
        'section1_content',
        'section1_image',
        'section2_content',
        'section2_image',
        'section3_content',
        'section3_image',
        'meta_title',
        'meta_description',
    ];

    // Accessor untuk image URLs
    public function getSection1ImageUrlAttribute()
    {
        return $this->section1_image ? asset('storage/' . $this->section1_image) : null;
    }

    public function getSection2ImageUrlAttribute()
    {
        return $this->section2_image ? asset('storage/' . $this->section2_image) : null;
    }

    public function getSection3ImageUrlAttribute()
    {
        return $this->section3_image ? asset('storage/' . $this->section3_image) : null;
    }
}
