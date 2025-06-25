<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate only the actual inputs from the user
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Save to database with display = 1 by default
        Feedback::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
            'display' => 1,
        ]);

        return back()->with('success', 'Thank you for your feedback!');
    }
}
