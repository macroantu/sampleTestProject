<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    /**
     * Display a listing of the wishlists.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $wishlists = Wishlist::all();
        return view('frontend.pages.wishlist_management', compact('wishlists'));
    }
    public function addWishlist(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        // Create a new wishlist
        Wishlist::create([
            'name' => $request->input('name'),
            // Add other fields if needed
        ]);

        return back()->with(['message' => 'Wishlist added successfully']);
    }

    public function delete($id)
    {
        $wishlist = Wishlist::find($id);

        if (!$wishlist) {
            return response()->json(['message' => 'Wishlist not found'], 404);
        }

        $wishlist->delete();

        return response()->json(['message' => 'Wishlist deleted successfully']);
    }

    public function editWishlist(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        // Find the wishlist by ID and update its name
        $wishlist = Wishlist::find($id);
        if ($wishlist) {
            $wishlist->name = $request->input('name');
            $wishlist->save();
            return response()->json(['message' => 'Wishlist updated successfully']);
        } else {
            return response()->json(['error' => 'Wishlist not found'], 404);
        }
    }

    public function getCollections()
    {
        // Fetch all wishlist collections from the database
        $collections = Wishlist::all();

        // Return the collections as JSON response
        return response()->json($collections);
    }
}
