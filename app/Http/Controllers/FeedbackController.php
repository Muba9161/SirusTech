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
            'message' => 'required|string|max:2000',
        ]);

        // Save to database with display = 1 by default
        Feedback::create([
            'name'    => $request->name,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Thank you for your feedback!');
    }
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return back()->with('success', 'Feedback deleted successfully.');
    }
}
