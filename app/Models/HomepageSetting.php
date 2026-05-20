<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSetting extends Model
{
    protected $fillable = [
        'logo_path',
        'banner_path',
        'slogan',
        'description',
        'telepon',
        'jam_operasional',
        'alamat',
        'url_sosmed',
        'username_sosmed',
        'foto_sosmed_path',
    ];
}
