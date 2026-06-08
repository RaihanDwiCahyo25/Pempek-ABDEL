<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageSettingController extends Controller
{
    public function edit()
    {
        $setting = HomepageSetting::first();

        return view('kelolaberanda', [
            'setting' => $setting,
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'halal_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'bpom_logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'slogan' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'telepon' => 'nullable|string|max:50',
            'jam_operasional' => 'nullable|string|max:100',
            'alamat' => 'nullable|string|max:500',
            'url_sosmed' => 'nullable|url|max:255',
            'username_sosmed' => 'nullable|string|max:100',
            'foto_sosmed' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $setting = HomepageSetting::firstOrNew([]);

        if ($request->hasFile('logo')) {
            $setting->logo_path = $this->storeImage($request->file('logo'), $setting->logo_path);
        }

        if ($request->hasFile('banner')) {
            $setting->banner_path = $this->storeImage($request->file('banner'), $setting->banner_path);
        }

        if ($request->hasFile('halal_logo')) {
            $setting->halal_logo_path = $this->storeImage($request->file('halal_logo'), $setting->halal_logo_path);
        }

        if ($request->hasFile('bpom_logo')) {
            $setting->bpom_logo_path = $this->storeImage($request->file('bpom_logo'), $setting->bpom_logo_path);
        }

        if ($request->hasFile('foto_sosmed')) {
            $setting->foto_sosmed_path = $this->storeImage($request->file('foto_sosmed'), $setting->foto_sosmed_path);
        }

        $setting->fill([
            'slogan' => $validated['slogan'] ?? $setting->slogan,
            'description' => $validated['description'] ?? $setting->description,
            'telepon' => $validated['telepon'] ?? $setting->telepon,
            'jam_operasional' => $validated['jam_operasional'] ?? $setting->jam_operasional,
            'alamat' => $validated['alamat'] ?? $setting->alamat,
            'url_sosmed' => $validated['url_sosmed'] ?? $setting->url_sosmed,
            'username_sosmed' => $validated['username_sosmed'] ?? $setting->username_sosmed,
        ]);

        $setting->save();

        return redirect()->route('admin.beranda')->with('success', 'Perubahan beranda berhasil disimpan.');
    }

    public function editKemitraan()
    {
        $setting = HomepageSetting::first();

        return view('kelolakemitraan', [
            'setting' => $setting,
        ]);
    }

    public function updateKemitraan(Request $request)
    {
        $validated = $request->validate([
            'kemitraan_online_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'kemitraan_offline_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'kemitraan_reseller_map_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'kemitraan_banner_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'kemitraan_online_description' => 'nullable|string|max:1000',
            'kemitraan_offline_description' => 'nullable|string|max:1000',
            'kemitraan_reseller_description' => 'nullable|string|max:1000',
            'kemitraan_banner_title' => 'nullable|string|max:255',
            'kemitraan_banner_description' => 'nullable|string|max:1000',
        ]);

        $setting = HomepageSetting::firstOrNew([]);

        if ($request->hasFile('kemitraan_online_image')) {
            $setting->kemitraan_online_image_path = $this->storeImage($request->file('kemitraan_online_image'), $setting->kemitraan_online_image_path, 'homepage/kemitraan');
        }

        if ($request->hasFile('kemitraan_offline_image')) {
            $setting->kemitraan_offline_image_path = $this->storeImage($request->file('kemitraan_offline_image'), $setting->kemitraan_offline_image_path, 'homepage/kemitraan');
        }

        if ($request->hasFile('kemitraan_reseller_map_image')) {
            $setting->kemitraan_reseller_map_image_path = $this->storeImage($request->file('kemitraan_reseller_map_image'), $setting->kemitraan_reseller_map_image_path, 'homepage/kemitraan');
        }

        if ($request->hasFile('kemitraan_banner_image')) {
            $setting->kemitraan_banner_image_path = $this->storeImage($request->file('kemitraan_banner_image'), $setting->kemitraan_banner_image_path, 'homepage/kemitraan');
        }

        $setting->fill([
            'kemitraan_online_description' => $validated['kemitraan_online_description'] ?? $setting->kemitraan_online_description,
            'kemitraan_offline_description' => $validated['kemitraan_offline_description'] ?? $setting->kemitraan_offline_description,
            'kemitraan_reseller_description' => $validated['kemitraan_reseller_description'] ?? $setting->kemitraan_reseller_description,
            'kemitraan_banner_title' => $validated['kemitraan_banner_title'] ?? $setting->kemitraan_banner_title,
            'kemitraan_banner_description' => $validated['kemitraan_banner_description'] ?? $setting->kemitraan_banner_description,
        ]);

        $setting->save();

        return redirect()->route('admin.kemitraan')->with('success', 'Perubahan kemitraan berhasil disimpan.');
    }

    private function storeImage($file, ?string $existingPath, string $folder = 'homepage'): string
    {
        if ($existingPath) {
            Storage::disk('public')->delete($existingPath);
        }

        return $file->store($folder, 'public');
    }
}
