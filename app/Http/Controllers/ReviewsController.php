<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function submit(ReviewRequest $request) {
        $reviews = new Review();
        $reviews->userName = $request->input('userName');
        $reviews->userText = $request->input('userText');

        $reviews->save();

        return redirect()->route('reviews');
    }

}
