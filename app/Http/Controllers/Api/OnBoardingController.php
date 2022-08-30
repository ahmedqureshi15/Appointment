<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\OnBoarding;

class OnBoardingController extends Controller
{
    public function index()
    {
      //  return view('add-blog-post-form');
        return view('users.stripe');
    }

    public function store(Request $request)
    {
        $post = new OnBoarding;
        $post->program = $request->program;
        $post->is_approved = $request->is_approved;
        $post->is_interview_booked = $request->is_interview_booked;
        $post->alert = $request->alert;
        $post->save();
        return redirect('stripe')->with('status', 'Data Has Been inserted');
    }
}
