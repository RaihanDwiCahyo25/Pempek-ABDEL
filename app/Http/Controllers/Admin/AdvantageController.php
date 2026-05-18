<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvantageRequest;
use App\Models\Advantage;
use Illuminate\Support\Facades\Storage;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advantages = Advantage::ordered()->paginate(10);

        return view('admin.advantages.index', compact('advantages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advantages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdvantageRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('keunggulan', 'public');
        }

        Advantage::create($data);

        return redirect()->route('admin.advantages.index')
            ->with('success', 'Keunggulan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advantage = Advantage::findOrFail($id);

        return view('admin.advantages.edit', compact('advantage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdvantageRequest $request, string $id)
    {
        $advantage = Advantage::findOrFail($id);
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('icon')) {
            if ($advantage->icon && Storage::disk('public')->exists($advantage->icon)) {
                Storage::disk('public')->delete($advantage->icon);
            }
            $data['icon'] = $request->file('icon')->store('keunggulan', 'public');
        }

        $advantage->update($data);

        return redirect()->route('admin.advantages.index')
            ->with('success', 'Keunggulan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advantage = Advantage::findOrFail($id);

        if ($advantage->icon && Storage::disk('public')->exists($advantage->icon)) {
            Storage::disk('public')->delete($advantage->icon);
        }

        $advantage->delete();

        return redirect()->route('admin.advantages.index')
            ->with('success', 'Keunggulan berhasil dihapus.');
    }
}
