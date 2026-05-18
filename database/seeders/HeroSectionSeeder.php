<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::create([
            'title' => "Asli Jambi\nSertifikasi BPOM\n<span class=\"text-[#cc0000]\">Halal</span>",
            'description' => 'Nikmati kelezatan Pempek Abdel dengan cuko kental khasnya. Dikemas vakum, tahan lama, dan siap kirim aman ke seluruh kota di Indonesia.',
            'is_active' => true,
        ]);
    }
}
