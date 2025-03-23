<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'whatsapp' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'message' => $request->message,
        ];

        Mail::to('medab.vall@gmail.com')
            ->cc('contact@sync-co.services')
            ->send(new ContactMail($data));

        return back()->with('success', __('content.home.contact.message_sent'));
    }
}
