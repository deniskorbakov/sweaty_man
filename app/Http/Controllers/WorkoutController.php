<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkoutRequest;
use App\Models\Workout;
use Illuminate\Support\Facades\DB;

class WorkoutController extends Controller
{
    public function submit(WorkoutRequest $request) {
        $workout = new Workout;
        $workout->name = $request->input('name');
        $workout->approach = $request->input('approach');
        $workout->repetition = $request->input('repetition');

        $workout->save();

        return redirect()->route('workout');
    }


}
