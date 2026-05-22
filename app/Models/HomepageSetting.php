<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSetting extends Model
{
    protected $fillable = [
        'logo_path',
        'banner_path',
        'halal_logo_path',
        'bpom_logo_path',
        'slogan',
        'description',
        'telepon',
        'jam_operasional',
        'alamat',
        'url_sosmed',
        'username_sosmed',
        'foto_sosmed_path',
    ];

    protected $appends = [
        'logo_url',
        'banner_url',
        'halal_logo_url',
        'bpom_logo_url',
    ];

    public function getLogoUrlAttribute()
    {
        return $this->logo_path
            ? asset('storage/' . $this->logo_path)
            : asset('images/logo-abdel.png');
    }

    public function getBannerUrlAttribute()
    {
        return $this->banner_path
            ? asset('storage/' . $this->banner_path)
            : asset('images/pempek-logo.png');
    }

    public function getHalalLogoUrlAttribute()
    {
        return $this->halal_logo_path
            ? asset('storage/' . $this->halal_logo_path)
            : asset('images/logo-halal.png');
    }

    public function getBpomLogoUrlAttribute()
    {
        return $this->bpom_logo_path
            ? asset('storage/' . $this->bpom_logo_path)
            : asset('images/logo-bpom.png');
    }
}
