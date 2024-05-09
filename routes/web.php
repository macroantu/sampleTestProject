<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\WishlistItemController;

Route::get('/', [WishlistController::class, 'index']);
Route::post('/wishlist/add', [WishlistController::class, 'addWishlist'])->name('wishlist.add');
Route::delete('/wishlist/{id}', [WishlistController::class, 'delete']);
Route::put('/wishlist/edit/{id}', [WishlistController::class, 'editWishlist']);
Route::get('/wishlist/collections', [WishlistController::class, 'getCollections']);
Route::get('/wishlist/items/{id}', [WishlistItemController::class, 'getWishlistItems']);
Route::delete('/wishlist/items/{id}', [WishlistItemController::class, 'delete']);
