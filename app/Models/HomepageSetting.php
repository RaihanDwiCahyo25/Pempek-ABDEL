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
        'kemitraan_online_image_path',
        'kemitraan_offline_image_path',
        'kemitraan_reseller_map_image_path',
        'kemitraan_banner_image_path',
        'kemitraan_online_description',
        'kemitraan_offline_description',
        'kemitraan_reseller_description',
        'kemitraan_banner_title',
        'kemitraan_banner_description',
    ];

    protected $appends = [
        'logo_url',
        'banner_url',
        'halal_logo_url',
        'bpom_logo_url',
        'kemitraan_online_image_url',
        'kemitraan_offline_image_url',
        'kemitraan_reseller_map_image_url',
        'kemitraan_banner_image_url',
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

    public function getKemitraanOnlineImageUrlAttribute()
    {
        return $this->kemitraan_online_image_path
            ? asset('storage/' . $this->kemitraan_online_image_path)
            : asset('images/pempek-box.png');
    }

    public function getKemitraanOfflineImageUrlAttribute()
    {
        return $this->kemitraan_offline_image_path
            ? asset('storage/' . $this->kemitraan_offline_image_path)
            : asset('images/toko-abdel.png');
    }

    public function getKemitraanResellerMapImageUrlAttribute()
    {
        return $this->kemitraan_reseller_map_image_path
            ? asset('storage/' . $this->kemitraan_reseller_map_image_path)
            : asset('images/peta-jawa.png');
    }

    public function getKemitraanBannerImageUrlAttribute()
    {
        return $this->kemitraan_banner_image_path
            ? asset('storage/' . $this->kemitraan_banner_image_path)
            : asset('images/pempek-frozen-campur.png');
    }
}
