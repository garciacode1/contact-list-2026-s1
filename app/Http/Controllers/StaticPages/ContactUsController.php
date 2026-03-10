<?php

namespace App\Http\Controllers\StaticPages;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        //Get the topics
        $topics = Topic::all();
        //return the contact-us view with the topics
        return view('static_pages.contact_us', compact('topics'));
    }

    public function thankyou()
    {
        return view('static_pages.ThankYou');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
