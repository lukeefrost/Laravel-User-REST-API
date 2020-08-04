<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Rating;
use App\Http\Resources\RatingResource;

class RatingController extends Controller
{

    public function __construct()
    {
        // Secured endpoint to rate a book
        $this->middleware('auth:api');
    }

    public function store(Request $request, Book $book)
    {
        // firstOrCreate - Checks if the user has already rated a specific book
        $rating = Rating::firstOrCreate(
          [
            'user_id' => $request->user()->id,
            'book_id' => $book->id,
          ],
          ['rating' => $request->rating]
        );

        return new RatingResource($rating);
    }
}
