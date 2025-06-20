<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'book_title' => 'required|string|max:255',
            'book_author' => 'required|string|max:255',
            'book_description' => 'nullable|string',
        ]);

        Favorite::create([
            'user_id' => 1, // Make sure user is logged in
            'book_title' => $request->book_title,
            'book_author' => $request->book_author,
            'book_description' => $request->book_description,
        ]);

        return redirect()->back()->with('success', 'Book added to favorites.');
    }
}
