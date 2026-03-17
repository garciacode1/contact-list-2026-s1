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
        return view('web.static.contact_us', compact('topics'));
    }

    public function thankyou()
    {
        return view('web.static.ThankYou');
    }

    public function store(Request $request)
    {
        //TODO: validate data
        $validated = $request->validate([

            'name' => ['required'],
            'email' => ['required,email'],
            'subject' => ['required'],
            'message' => ['required'],
            'topic_id' => ['required, integer]'
        ]);
        //Store contact message
        Message:: create(
          [
            'name' => $validated->name,
            'email' => $validated->email,
            'subject' => $validated->subject,
            'message' => $validated->message,
            'topic_id' => $validated->topic_id,


          ]
        );
        return redirect()->route('static.thank-you');
    }
}
