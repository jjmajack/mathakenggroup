<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Prepare email data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'service' => $request->service,
            'message' => $request->message,
        ];

        try {
            // Send email
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('info@mathakenggroup.co.za')
                        ->subject('New Contact Form Submission from ' . $data['name'])
                        ->replyTo($data['email']);
            });

            return back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}
