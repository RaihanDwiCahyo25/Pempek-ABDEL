<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    public function edit()
    {
        $tentangKami = TentangKami::first() ?? new TentangKami();
        return view('kelolatentang', compact('tentangKami'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'section_subtitle' => 'required|string|max:100',
            'section_title' => 'required|string|max:100',
            'section1_content' => 'required|string|max:750',
            'section1_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'section2_content' => 'required|string|max:750',
            'section2_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'section3_content' => 'required|string|max:750',
            'section3_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
        ]);

        $tentangKami = TentangKami::first() ?? new TentangKami();

        // Update text fields
        $tentangKami->section_subtitle = $validated['section_subtitle'];
        $tentangKami->section_title = $validated['section_title'];
        $tentangKami->section1_content = $validated['section1_content'];
        $tentangKami->section2_content = $validated['section2_content'];
        $tentangKami->section3_content = $validated['section3_content'];
        $tentangKami->meta_title = $validated['meta_title'] ?? null;
        $tentangKami->meta_description = $validated['meta_description'] ?? null;

        // Handle image uploads
        foreach (['section1', 'section2', 'section3'] as $section) {
            $imageField = $section . '_image';
            $contentKey = $section . '_content';

            if ($request->hasFile($imageField)) {
                // Delete old image if exists
                if ($tentangKami->$imageField && Storage::exists('public/' . $tentangKami->$imageField)) {
                    Storage::delete('public/' . $tentangKami->$imageField);
                }

                // Store new image
                $path = $request->file($imageField)->store('tentang-kami', 'public');
                $tentangKami->$imageField = $path;
            }
        }

        $tentangKami->save();

        return redirect()->route('admin.tentang')
            ->with('success', 'Data Tentang Kami berhasil disimpan!');
    }

    public function deleteImage(Request $request)
    {
        $tentangKami = TentangKami::first();

        if (!$tentangKami) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $imageField = $request->input('field');
        $validFields = ['section1_image', 'section2_image', 'section3_image'];

        if (!in_array($imageField, $validFields)) {
            return response()->json(['error' => 'Field tidak valid'], 422);
        }

        if ($tentangKami->$imageField && Storage::exists('public/' . $tentangKami->$imageField)) {
            Storage::delete('public/' . $tentangKami->$imageField);
            $tentangKami->$imageField = null;
            $tentangKami->save();

            return response()->json(['success' => 'Gambar berhasil dihapus']);
        }

        return response()->json(['error' => 'Gambar tidak ditemukan'], 404);
    }
}
