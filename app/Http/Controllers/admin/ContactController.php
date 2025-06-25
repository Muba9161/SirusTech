<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        $contacts = Contact::all();

        return view('admin.contact.index',compact('contacts'));
    }
    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        Contact::create($validated);

        return back()->with('success', 'Message sent successfully!');
    }
}
