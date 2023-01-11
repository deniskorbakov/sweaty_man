<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function submit(ReviewRequest $request) {
        $reviews = new Review;
        $reviews->userName = $request->input('userName');
        $reviews->userText = $request->input('userText');

        $reviews->save();

        return redirect()->route('reviews');
    }

    public function allData() {
        $reviews = new Review;
        return view('allReviews',['data' => $reviews->all()]);
    }

    public function showData($id) {
        $reviews = new Review;
        return view('showReviews',['data' => $reviews->find($id)]);
    }

}
