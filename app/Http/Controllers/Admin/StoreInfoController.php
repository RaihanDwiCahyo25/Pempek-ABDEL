<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfoRequest;
use App\Models\StoreInfo;

class StoreInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storeInfos = StoreInfo::ordered()->get();

        return view('admin.store-infos.index', compact('storeInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store-infos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInfoRequest $request)
    {
        StoreInfo::create($request->validated());

        return redirect()->route('admin.store-infos.index')
            ->with('success', 'Store info item created successfully.');
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
        $storeInfo = StoreInfo::findOrFail($id);

        return view('admin.store-infos.edit', compact('storeInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreInfoRequest $request, string $id)
    {
        $storeInfo = StoreInfo::findOrFail($id);
        $storeInfo->update($request->validated());

        return redirect()->route('admin.store-infos.index')
            ->with('success', 'Store info item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $storeInfo = StoreInfo::findOrFail($id);
        $storeInfo->delete();

        return redirect()->route('admin.store-infos.index')
            ->with('success', 'Store info item deleted successfully.');
    }
}
