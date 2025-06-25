<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $testimonials = Feedback::where('display', 1)->latest()->get();

        return view('frontend.homepage.index', compact('testimonials'));
    }
}
