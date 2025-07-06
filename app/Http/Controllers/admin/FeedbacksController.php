<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();

        return view('admin.feedback.index', compact('feedbacks'));
    }
}
