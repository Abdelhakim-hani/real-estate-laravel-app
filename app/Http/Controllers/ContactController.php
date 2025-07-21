<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email (optional)
        Mail::raw($validated['message'], function ($message) use ($validated) {
            $message->to('han.23han@gmail.com')
                    ->subject('New Contact Message from ' . $validated['name'])
                    ->replyTo($validated['email']);
        });

        // Redirect or respond
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
