<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_produk' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string|max:255',
            'deskripsi_lengkap' => 'required|string|max:2000',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
            'link_whatsapp' => 'required|url|max:500',
            'status_active' => 'nullable|in:on,1,0,true,false',
            'urutan_produk' => 'required|integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'nama_produk.required' => 'Nama produk wajib diisi.',
            'deskripsi_singkat.required' => 'Deskripsi singkat wajib diisi.',
            'deskripsi_lengkap.required' => 'Deskripsi lengkap wajib diisi.',
            'harga.required' => 'Harga wajib diisi.',
            'gambar.required' => 'Gambar produk wajib diunggah.',
            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Gambar harus berformat jpeg, png, jpg, atau webp.',
            'link_whatsapp.required' => 'Link WhatsApp wajib diisi.',
            'link_whatsapp.url' => 'Link WhatsApp harus berupa URL yang valid.',
            'urutan_produk.required' => 'Urutan produk wajib diisi.',
        ];
    }
}
