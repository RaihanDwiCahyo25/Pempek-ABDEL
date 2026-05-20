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
            'logo' => 'nullable|image|max:2048',
            'banner' => 'nullable|image|max:4096',
            'slogan' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'telepon' => 'nullable|string|max:50',
            'jam_operasional' => 'nullable|string|max:100',
            'alamat' => 'nullable|string|max:500',
            'url_sosmed' => 'nullable|url|max:255',
            'username_sosmed' => 'nullable|string|max:100',
            'foto_sosmed' => 'nullable|image|max:2048',
        ]);

        $setting = HomepageSetting::firstOrNew([]);

        if ($request->hasFile('logo')) {
            if ($setting->logo_path) {
                Storage::disk('public')->delete($setting->logo_path);
            }
            $setting->logo_path = $request->file('logo')->store('homepage', 'public');
        }

        if ($request->hasFile('banner')) {
            if ($setting->banner_path) {
                Storage::disk('public')->delete($setting->banner_path);
            }
            $setting->banner_path = $request->file('banner')->store('homepage', 'public');
        }

        if ($request->hasFile('foto_sosmed')) {
            if ($setting->foto_sosmed_path) {
                Storage::disk('public')->delete($setting->foto_sosmed_path);
            }
            $setting->foto_sosmed_path = $request->file('foto_sosmed')->store('homepage', 'public');
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
}
