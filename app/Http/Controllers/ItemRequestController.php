<?php

namespace App\Http\Controllers;

use App\Models\ItemRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemRequestController extends Controller
{
    /**
     * GET: My Requests (for Vue page)
     */
    public function index()
    {
        $requests = ItemRequest::with(['item', 'requester'])
            ->where('requester_id', Auth::id())
            ->latest()
            ->get();

        return response()->json($requests);
    }

    /**
     * STORE: Create request (borrow / donate)
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'owner_id' => 'required|exists:users,id',
            'request_type' => 'required|in:borrow,donate',
        ]);

        $itemRequest = ItemRequest::create([
            'item_id' => $request->item_id,
            'requester_id' => Auth::id(),
            'owner_id' => $request->owner_id,
            'status' => 'pending',
            'request_date' => now(),
            'request_type' => $request->request_type ?? 'borrow',
        ]);

        return response()->json([
            'message' => 'Request sent successfully',
            'data' => $itemRequest
        ], 201);
    }

    /**
     * SHOW single request (optional)
     */
    public function show($id)
    {
        return ItemRequest::with(['item', 'requester', 'owner'])
            ->findOrFail($id);
    }

    /**
     * CANCEL REQUEST (delete)
     */
    public function destroy($id)
    {
        $request = ItemRequest::where('requester_id', Auth::id())
            ->findOrFail($id);

        $request->delete();

        return response()->json([
            'message' => 'Request cancelled successfully'
        ]);
    }

    /**
     * OWNER: Approve request
     */
    public function approve($id)
    {
        $request = ItemRequest::where('owner_id', Auth::id())
            ->findOrFail($id);

        $request->update([
            'status' => 'approved',
            'approved_date' => now(),
        ]);

        return response()->json([
            'message' => 'Request approved'
        ]);
    }

    /**
     * OWNER: Reject request
     */
    public function reject($id)
    {
        $request = ItemRequest::where('owner_id', Auth::id())
            ->findOrFail($id);

        $request->update([
            'status' => 'rejected',
        ]);

        return response()->json([
            'message' => 'Request rejected'
        ]);
    }
}