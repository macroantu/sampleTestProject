<?php

namespace Database\Factories;

use App\Models\WishlistItem;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WishlistItem>
 */
class WishlistItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = WishlistItem::class;

    public function definition(): array
    {
        return [
            'wishlist_id' => \App\Models\WishlistItem::factory(), // Example of associating with a Wishlist model
            'item_name' => $this->faker->word,
            'item_price' => $this->faker->randomFloat(2, 0, 100), // Example price values
            'item_image' => $this->faker->imageUrl(), // Example image URL
        ];
    }
}
