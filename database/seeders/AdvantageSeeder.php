<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Advantage::truncate();

        Advantage::create([
            'title' => 'Bahan Ikan Tenggiri Premium',
            'description' => 'Dibuat dari 100% daging ikan tenggiri segar pilihan untuk menjamin tekstur yang lembut, kenyal, dan rasa gurih yang otentik tanpa bau amis.',
            'icon' => null,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Advantage::create([
            'title' => 'Garansi Cuko Kental Asli',
            'description' => 'Diracik menggunakan resep rahasia dengan gula batok asli. Cuko yang pekat, perpaduan pas pedas, manis, dan asam yang menggugah selera.',
            'icon' => null,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Advantage::create([
            'title' => 'Kemasan Vakum Aman',
            'description' => 'Dikemas dengan teknologi vakum kedap udara dan dibekukan. Menjamin pempek tetap fresh, higienis, dan sangat aman dikirim hingga ke luar pulau.',
            'icon' => null,
            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}
