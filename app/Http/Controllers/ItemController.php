<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * GET ALL ITEMS (Browse page with filters)
     */
    public function index(Request $request)
    {
        $query = Item::with('user')
            ->where('item_status', 'available');

        // SEARCH
        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // TYPE FILTER (lending / donating)
        if ($request->type && in_array($request->type, ['lending', 'donating'])) {
            $query->where('type', $request->type);
        }

        // LOCATION FILTER (barangay)
        if ($request->location) {
            $query->where('location', $request->location);
        }

        return response()->json(
            $query->latest()->get()
        );
    }

    /**
     * STORE ITEM
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:lending,donating',
            'location' => 'required|string',
        ]);

        $imagePath = null;

        if ($request->hasFile('condition_image')) {
            $imagePath = $request->file('condition_image')->store('items', 'public');
        }

        $item = Item::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'location' => $request->location,
            'item_status' => 'available',
            'condition_description' => $request->condition_description,
            'condition_image' => $imagePath,
        ]);

        return response()->json([
            'message' => 'Item created successfully',
            'item' => $item
        ], 201);
    }

    /**
     * SHOW SINGLE ITEM
     */
    public function show($id)
    {
        $item = Item::with('user')->findOrFail($id);

        return response()->json($item);
    }

    /**
     * UPDATE ITEM (SAFE VERSION)
     */
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|string|max:255',
            'type' => 'sometimes|in:lending,donating',
            'location' => 'sometimes|string',
            'item_status' => 'sometimes|in:available,unavailable',
        ]);

        $item->update([
            'title' => $request->title ?? $item->title,
            'description' => $request->description ?? $item->description,
            'type' => $request->type ?? $item->type,
            'location' => $request->location ?? $item->location,
            'item_status' => $request->item_status ?? $item->item_status,
            'condition_description' => $request->condition_description ?? $item->condition_description,
        ]);

        return response()->json([
            'message' => 'Item updated successfully',
            'item' => $item
        ]);
    }

    /**
     * DELETE ITEM
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if ($item->condition_image) {
            Storage::disk('public')->delete($item->condition_image);
        }

        $item->delete();

        return response()->json([
            'message' => 'Item deleted successfully'
        ]);
    }
}