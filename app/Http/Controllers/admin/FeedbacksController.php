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
    public function toggleDisplay($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->display = !$feedback->display;
        $feedback->save();

        return back()->with('status', 'Feedback visibility updated.');
    }
}
