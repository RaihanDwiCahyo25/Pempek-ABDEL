<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroSections = HeroSection::all();
        return view('admin.hero-sections.index', compact('heroSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero-sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        HeroSection::create($request->all());

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $heroSection = HeroSection::findOrFail($id);
        return view('admin.hero-sections.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $heroSection = HeroSection::findOrFail($id);
        $heroSection->update($request->all());

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $heroSection = HeroSection::findOrFail($id);
        $heroSection->delete();

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section deleted successfully.');
    }
}
