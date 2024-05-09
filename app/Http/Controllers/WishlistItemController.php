<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Http\Request;

class WishlistItemController extends Controller
{
    public function getWishlistItems($id)
    {
        try {
            // Fetch wishlist items for the given wishlist ID
            $wishlistItems = WishlistItem::where('wishlist_id', $id)->get();

            // Return the wishlist items as JSON response
            return response()->json($wishlistItems);
        } catch (\Exception $e) {
            // Handle any errors and return an error response
            return response()->json(['error' => 'Failed to fetch wishlist items.'], 500);
        }
    }


    public function delete($id)
    {
        $wishlist = WishlistItem::find($id);

        if (!$wishlist) {
            return response()->json(['message' => 'Wishlist item not found'], 404);
        }

        $wishlist->delete();

        return response()->json(['message' => 'Wishlist item deleted successfully']);
    }
}
