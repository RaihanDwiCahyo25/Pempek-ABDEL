<?php

namespace App\Http\Controllers;

use App\Models\HomepageSetting;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $homepageSetting = HomepageSetting::first();
        $search = $request->query('search');

        $products = Product::active()->ordered()
            ->when($search, function ($query, $search) {
                $query->where('nama_produk', 'like', "%{$search}%")
                    ->orWhere('deskripsi_singkat', 'like', "%{$search}%")
                    ->orWhere('deskripsi_lengkap', 'like', "%{$search}%");
            })
            ->paginate(12)
            ->withQueryString();

        return view('katalog', compact('products', 'search', 'homepageSetting'));
    }
}
