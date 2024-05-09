<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wishlist;
use App\Models\WishlistItem;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 wishlists
        Wishlist::factory(5)->create()->each(function ($wishlist) {
            // For each wishlist, create 10 wishlist items
            WishlistItem::factory(10)->create(['wishlist_id' => $wishlist->id]);
        });
    }
}
