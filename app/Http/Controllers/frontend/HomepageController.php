<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->get(); // fetch all feedbacks, no display filter

        return view('frontend.homepage.index', compact('feedbacks'));
    }
}
