<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WishlistItem;

class WishlistItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        // Create 10 wishlist items for each wishlist (assuming you have 5 wishlists)
        foreach (range(1, 5) as $wishlistId) {
            WishlistItem::factory(10)->create(['wishlist_id' => $wishlistId]);
        }
    }
}
