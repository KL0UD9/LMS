<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_image',
        'category_id',
        'status', // if you have book status (available, unavailable)
        // Add any other fields from your books table
    ];

    // Existing relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // New relationships for reading system
    public function chapters()
    {
        return $this->hasMany(Chapter::class)->orderBy('order');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    // If you're keeping borrowing functionality
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    // Helper methods
    public function isAvailable()
    {
        return $this->status === 'available'; // Adjust based on your status values
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating') ?: 0;
    }

    public function isFavoritedByUser($userId)
    {
        return $this->favorites()->where('user_id', $userId)->exists();
    }

    public function firstChapter()
    {
        return $this->chapters()->orderBy('order')->first();
    }

    // If you need to maintain borrowing functionality
    public function currentBorrower()
    {
        return $this->borrows()->whereNull('returned_at')->first();
    }
}
