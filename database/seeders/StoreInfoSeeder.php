<?php

namespace Database\Seeders;

use App\Models\StoreInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoreInfo::truncate();

        StoreInfo::create([
            'title' => 'Senin - Sabtu',
            'subtitle' => '09:00 - 19:00',
            'label' => 'Jam Buka',
            'icon' => 'clock',
            'sort_order' => 1,
        ]);

        StoreInfo::create([
            'title' => 'Jl. Pratu Satir, The Hok, Kec. Jambi Sel.,',
            'subtitle' => 'Kota Jambi, Jambi 36125',
            'label' => 'Lokasi Toko Offline',
            'icon' => 'location',
            'sort_order' => 2,
        ]);

        StoreInfo::create([
            'title' => '0811-7408-504',
            'subtitle' => null,
            'label' => 'Nomor Telepon',
            'icon' => 'phone',
            'sort_order' => 3,
        ]);
    }
}
